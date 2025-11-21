<?php

namespace App\Http\Controllers;
use App\Models\Citation;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CitationController extends Controller
{
    public function index()
    {
        $citations = Citation::with('user')->orderBy('created_at', 'desc')->get();
        return view('citation.citation', compact('citations'));
    }
    public function gestion()
    {
        // if (Auth::user()->isAdmin() || Auth::user()->isAuteur()) {
        return view('citation.citation-gestion');
        // } else {
        // return redirect('/')->with('error', 'Vous n\'êtes pas autorisé à accéder à cette page.');
        // }
    }

    public function create()
    {
        return view('citation.create');
    }

    public function store(Request $request)
    {

        $user = Auth::user();
        $request['user_id'] = $user->id;

        $validateCitation = $request->validate([
            'texte' => 'required|string|max:255',
            'auteur' => 'required|string|max:100',
            'user_id' => 'required|numeric|exists:users,id' // <-- C'est la ligne magique
        ]);

        $citation = Citation::create($validateCitation);
        // dd($citation);
        return redirect('/')->with('success', 'Citation ajoutée avec succès !');
    }

    public function edit(Citation $citation)
    {
        return view('citation.edit', compact('citation'));
    }

    public function update(Request $request, Citation $citation)
    {
        $validatedData = $request->all();

        $citation->update($validatedData);

        return redirect('/')->with('success', 'Citation mise à jour avec succès !');
    }


    public function delete(Citation $citation)
    {
        // Vérifier si l'utilisateur authentifié est le propriétaire de la citation
        if (Auth::id() !== $citation->user_id) {
            return redirect('/citation')->with('error', 'Vous n\'êtes pas autorisé à supprimer cette citation.');
        }
        $citation->delete();
        return redirect('/')->with('success', 'Citation supprimée avec succès !');
    }
}

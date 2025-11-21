<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        // if (Auth::user()->isAdmin()) {
           
            $users = User::all();
            return view('layouts.gestion-user', compact('users'));
        // }else{
        //     return redirect('/')->with('error', 'Vous n\'êtes pas autorisé à accéder à cette page.');
        // }
    }
    public function profile()
    {
        // if (Auth::user()->isAdmin()) {
           
           
            return view('layouts.profile');
        // }else{
        //     return redirect('/')->with('error', 'Vous n\'êtes pas autorisé à accéder à cette page.');
        // }
    }




    public function updateRole(Request $request, User $user)
    {
          $request->validate([
            'role' => 'required|in:admin,authore,lecteur',
        ]);
        if (auth()->id() === $user->id && $request->role !== 'admin') {
            return back()->with('error', "Vous ne pouvez pas retirer votre propre rôle d'admin.");
        }
        $user->role = $request->role;
        $user->save();
        return back()->with('success', 'Rôle mis à jour.');
    }

    public function delete(User $user)
    {
        $user->delete();
        return redirect('/gestion-user')->with('success', 'Utilisateur supprimé avec succès !');
    }
}

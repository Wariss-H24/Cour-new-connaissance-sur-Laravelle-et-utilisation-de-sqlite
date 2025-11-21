<?php

namespace App\Http\Controllers\Middleware;
use Closure;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CheckUserRole extends Controller
{
      public function handle($request, Closure $next, ...$roles)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }
 
        $user = Auth::user();
 
        if (!in_array($user->role, $roles)) {
            abort(403, 'Accès refusé.');
        }
 
        return $next($request);
    }
}

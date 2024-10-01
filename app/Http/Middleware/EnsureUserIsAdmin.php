<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class EnsureUserIsAdmin

{
    public function handle($request, Closure $next)
    {
        // $response = $next($request);
        // Check if the user is authenticated and has the admin role
        if (Auth::check() && auth()->user()->hasRole('admin')) {
            return $next($request); // Proceed if the user is an admin
        }

        // If not, redirect them to the home page or anywhere else
        return redirect('/')->with('error', 'Unauthorized access');
    }
}

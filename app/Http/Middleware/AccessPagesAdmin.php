<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AccessPagesAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Criando restrições de acesso para páginas dos admins.
        // Creating access restrictions for admins pages.

        $user = Auth::user();
        $roles = Auth::user()->roles;

        if($user === null)
        {
            return redirect()->route('login');
        }

        if($roles !== "ADMIN")
        {
            return redirect()->route('home');
        }

        return $next($request);
    }
}

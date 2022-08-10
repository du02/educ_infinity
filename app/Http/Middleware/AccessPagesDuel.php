<?php

namespace App\Http\Middleware;

use App\Character;
use Closure;
use Illuminate\Support\Facades\Auth;

class AccessPagesDuel
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
        $id_user = Auth::id();
        $character = Character::where('studant_id', $id_user)->first();

        if($character->energy == 0)
        {
            toastr()->error('Sua energia acabou volte amanhã!');
            return redirect()->route('studant.character');
        }

        return $next($request);
    }
}

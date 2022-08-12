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

        // energy did not have to be less than or equal to zero - RF 07
        if($character->energy == 0)
        {
            toastr()->error('Sua energia acabou volte amanhã!');
            return redirect()->route('studant.character');
        }

        // points must be greater than 5 - RF 07
        if($character->points < 4)
        {
            toastr()->warning('Responda as Questões, liberado se tiver mais que 5 pontos!');
            return redirect()->route('studant.character');
        }

        return $next($request);
    }
}

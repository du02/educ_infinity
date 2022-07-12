<?php

namespace App\Http\Middleware;

use App\Character;
use Closure;
use Illuminate\Support\Facades\Auth;

class AccessPagesQuestion
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

        // DB date and time - Data e hora do BD
        $old_day = intval($character->updated_at->format('j'));
        $old_month = intval($character->updated_at->format('m'));
        $old_year= intval($character->updated_at->format('y'));

        // Location date and time - Data e hora do local
        $now_day = intval(date('j'));
        $now_month = intval(date('m'));
        $now_year = intval(date('y'));

        if ($old_year >= $now_year)
        {
            if ($old_month >= $now_month)
            {
                if ($old_day >= $now_day)
                {
                    toastr()->success('Missões complidas por hoje!');
                    return redirect()->route('studant.character');
                }
            }
        }

        return $next($request);
    }
}

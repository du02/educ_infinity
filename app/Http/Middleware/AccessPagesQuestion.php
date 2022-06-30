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
        $old_data = $character->updated_at->format('j-m-y');
        $old_data_time = $character->updated_at->format('H:i:s');

        // Location date and time - Data e hora do local
        $now_date = date('j-m-y');
        $now_date_time = date('H:i:s');

        if($old_data >= $now_date)
        {
            toastr()->success('Missões complidas por hoje!');
            return redirect()->route('studant.character');
        }

        return $next($request);
    }
}

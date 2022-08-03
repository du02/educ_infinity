<?php

namespace App\Http\Controllers\Studant;

use App\Character;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BattlesController extends Controller
{
    public function index()
    {
        //sleep(5);
        return $this->getOpponents();

    }

    protected function getOpponents()
    {
        // amount opponents - quantidade de oponentes
        $amount_opponents = Character::all()->count();

        // rand_amount - randomizar quantidade
        $rand = mt_rand(2, $amount_opponents);

        // data user login - dados do usuário logado
        $my_character_îd = Auth::id();

        $data = $this->resortOpponent($my_character_îd, $rand);

        return view('studant/duels', compact('data'));
        return response()->json($data);

    }

    protected function resortOpponent($id_user, $id_rand)
    {
        try {

            if($id_user !== $id_rand && !empty($id_user) && !empty($id_rand))
            {
                $challenged = Character::where('studant_id',  $id_user)->get(); // DesafiaDO (EU)
                $opponent = Character::where('studant_id', $id_rand)->get(); // DesafiANTE (OPONENTE)
                $name_opponent = User::where('id', $opponent[0]->studant_id)->get('name');

                return [
                    'challenged' => $challenged,
                    'opponent' => $opponent,
                    'name_opponent' => $name_opponent
                ];

            } else {

                $challenged = Character::where('studant_id',  $id_user)->get(); // DesafiaDO (EU)
                $opponent = Character::where('studant_id', ($id_rand - 1))->get(); // DesafiANTE (OPONENTE)
                $name_opponent = User::where('id', $opponent[0]->studant_id)->get('name');

                return [
                    'challenged' => $challenged,
                    'opponent' => $opponent,
                    'name_opponent' => $name_opponent
                ];
            }

        } catch (Exception $e) {
            header("Refresh: 0");
        }
    }
}

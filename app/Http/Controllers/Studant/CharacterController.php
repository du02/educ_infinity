<?php

namespace App\Http\Controllers\Studant;

use App\Character;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CharacterController extends Controller
{
    public function index()
    {
        return view('studant.home');
    }

    public function character()
    {
        $studant = Auth::id();
        $myCharacter = Character::where('studant_id', $studant)->get();

        return view('studant.my_character', compact('myCharacter'));
    }

    public function characterSelected(Request $request)
    {
        $studant = Auth::id();
        $dataCharacter = $request->all();
        $accessModify = $request->all('access'); // 1

        // Adding values of the chosen character - Adicionando valores do personagem escolhido
        $character = new Character();
        $character->create($dataCharacter);

        // Modifying access after character choice - Modificando acesso após escolha do personagem
        $accessStudant = User::find($studant);
        $accessStudant->access = intval($accessModify); // convert string in integer - convertendo valor string par inteiro
        $accessStudant->save();

        toastr()->info('Personagem escolhido com sucesso!');
        return redirect()->route('studant.home');
    }
}

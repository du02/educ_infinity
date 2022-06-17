<?php

namespace App\Http\Controllers\Studant;

use App\Character;
use App\Http\Controllers\Controller;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResolveQuestionsController extends Controller
{
    public function index()
    {
        $studant = Auth::id();
        $myAvatar = Character::where('studant_id', $studant)->get();

        return view('studant/resolve_questions', compact('myAvatar'));
    }

    public function resolveQuestions()
    {
        // Totaling questions - Totalizando questões
        $questions_all = Question::all();

        // Creating random array - Criando array random
        $arr_number = [
            mt_rand(1, $questions_all->count()),
            mt_rand(1, $questions_all->count()),
            mt_rand(1, $questions_all->count()),
            mt_rand(1, $questions_all->count()),
            mt_rand(1, $questions_all->count()),
        ];

        // Selecting questions by 'id', using array - Selecionando questões por 'id', usando o array
        $questions = Question::whereIn('id', $arr_number)->get();

        //dd($questions, $arr_number);

        return response()->json($questions);
    }
}

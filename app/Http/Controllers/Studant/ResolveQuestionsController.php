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

        $questions = $this->resortingQuestions();

        return view('studant/resolve_questions', compact('myAvatar', 'questions'));
    }
    public function compareQuestions(Request $request)
    {
        // 4 (1), 7 (2), 10 (3), 13 (4), 16 (5)
        $arr_amount = count($request->all());
        $point = 0;

        // Counting power points - Contabilizando pontos de poder
        switch ($arr_amount)
        {
            case 4:

                if($request->question_response_1 === $request->resolve_1)
                {
                    $point += 1;
                }
                else
                {
                    echo 'Errou!';
                }

                $mult_point = $point * 5;
                $this->addingPowerCharacter($mult_point, $point);

                break;

            case 7:

                if($request->question_response_1 === $request->resolve_1)
                {
                    $point += 1;
                }
                else
                {
                    echo 'Errou!';
                }

                if($request->question_response_2 === $request->resolve_2)
                {
                    $point += 1;
                }
                else
                {
                    echo 'Errou!';
                }

                $mult_point = $point * 5;
                $this->addingPowerCharacter($mult_point, $point);

                break;

            case 10:

                if($request->question_response_1 === $request->resolve_1)
                {
                    $point += 1;
                }
                else
                {
                    echo 'Errou!';
                }

                if($request->question_response_2 === $request->resolve_2)
                {
                    $point += 1;
                }
                else
                {
                    echo 'Errou!';
                }

                if($request->question_response_3 === $request->resolve_3)
                {
                    $point += 1;
                }
                else
                {
                    echo 'Errou!';
                }


                $mult_point = $point * 5;
                $this->addingPowerCharacter($mult_point, $point);

                break;

            case 13:

                if($request->question_response_1 === $request->resolve_1)
                {
                    $point += 1;
                }
                else
                {
                    echo 'Errou!';
                }

                if($request->question_response_2 === $request->resolve_2)
                {
                    $point += 1;
                }
                else
                {
                    echo 'Errou!';
                }

                if($request->question_response_3 === $request->resolve_3)
                {
                    $point += 1;
                }
                else
                {
                    echo 'Errou!';
                }

                if($request->question_response_4 === $request->resolve_4)
                {
                    $point += 1;
                }
                else
                {
                    echo 'Errou!';
                }

                $mult_point = $point * 5;
                $this->addingPowerCharacter($mult_point, $point);

                break;

            case 16:

                if($request->question_response_1 === $request->resolve_1)
                {
                    $point += 1;
                }
                else
                {
                    echo 'Errou!';
                }

                if($request->question_response_2 === $request->resolve_2)
                {
                    $point += 1;
                }
                else
                {
                    echo 'Errou!';
                }

                if($request->question_response_3 === $request->resolve_3)
                {
                    $point += 1;
                }
                else
                {
                    echo 'Errou!';
                }

                if($request->question_response_4 === $request->resolve_4)
                {
                    $point += 1;
                }
                else
                {
                    echo 'Errou!';
                }

                if($request->question_response_5 === $request->resolve_5)
                {
                    $point += 1;
                }
                else
                {
                    echo 'Errou!';
                }

                $mult_point = $point * 5;
                $this->addingPowerCharacter($mult_point, $point);

                break;
        }

        // Redirection after assigning new power points - Redirecionamento depois que atribuir novos pontos de poder
        return redirect()->route('studant.character');

    }

    public function resortingQuestions()
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
        //return response()->json($questions);

        return $questions;
    }

    public function getCharacterPower()
    {
        // Get value Power Character - Pegando valor do poder do personagem
        $id_user = Auth::id();
        $character = Character::where('studant_id', $id_user)->first();

        return $character->power;
    }

    public function getCharacterPoints()
    {
        // Get value Points Character - Pegando valor do pontos do personagem
        $id_user = Auth::id();
        $character = Character::where('studant_id', $id_user)->first();

        return $character->points;
    }

    public function addingPowerCharacter($val, $correct_questions_amount)
    {
        $power = $this->getCharacterPower();
        $new_power = $power + $val;

        $points = $this->getCharacterPoints();
        $new_points = $points + $correct_questions_amount;

        $this->setCharacterNewPowerAndPoints($new_power, $val, $new_points);
    }

    public function setCharacterNewPowerAndPoints($new_val, $old_val, $new_points)
    {
        $id_user = Auth::id();

        // Editing new character power - Editando novo poder do personagem
        $character = Character::where('studant_id', $id_user)->first();
        $character->power = $new_val;
        $character->points = $new_points;
        $character->save();

        toastr()->info('Seu Poder aumentou em: ' . $old_val);
    }

}

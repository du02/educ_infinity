<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mockery\Exception;

class QuestionController extends Controller
{
    public function index()
    {
        return view('admin.questions.question_list');
    }

    public function create()
    {
        $userID = Auth::id();

        return view('admin.questions.question_create', compact('userID'));
    }

    public function store(Request $request)
    {
        try {
            $data = $request->all();

            // validation
            if($request->hasFile('question_img') && $request->file('question_img')->isValid())
            {
                $dataImg = $request->file('question_img');
                $imageName = md5($dataImg->getClientOriginalName() . strtotime('now')) . '.' . $dataImg->extension();

                // save in paste
                $dataImg->move(public_path('img/questions'), $imageName);

                // image new name
                $data['question_img'] = $imageName;
            } else {
                $data['question_img'] = '';
            }

            $question = new Question();
            $question->create($data);

            toastr()->success('Questão criada com sucesso!');
            return redirect()->route('admin.questions.index');

        } catch (Exception $err) {
            toastr()->error('Não foi possível adicionar os dados!')
            ->warning($err->getMessage());
            return redirect()->route('admin.questions.index');

        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mockery\Exception;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.questions.question_list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userID = Auth::id();

        return view('admin.questions.question_create', compact('userID'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

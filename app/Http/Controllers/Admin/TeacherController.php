<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mockery\Exception;

class TeacherController extends Controller
{
    public function index()
    {
        $admin = Auth::id();
        $teachers = User::where('roles', 'TEACHER')
                        ->where('reference_id_admin', $admin)
                        ->get();

        return view('admin.teachers.teacher_list', compact('teachers'));
    }

    public function create()
    {
        $admin = Auth::id();

        return view('admin.teachers.teacher_create', compact('admin'));
    }

    public function store(Request $request)
    {
        try {

            $data = $request->all();
            $data['password'] = bcrypt($data['password']);

            $teachers = new User();
            $teachers->create($data);

            toastr()->success('Salvo com Sucesso!');
            return redirect()->route('admin.teachers.index');

        } catch (Exception $err) {

            toastr()->error('Não foi possível adicionar os dados!')
                    ->warning($err->getMessage());
            return redirect()->route('admin.teachers.index');

        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $admin = Auth::id();
        $teacher = User::find($id);

        return view('admin.teachers.teacher_edit', compact('teacher', 'admin'));
    }

    public function update(Request $request, $id)
    {
        try {
            $data = $request->all();

            if($data['password']) {
                $data['password'] = bcrypt($data['password']);
            }

            $teacher = User::findOrfail($id);
            $teacher->update($data);

            toastr()->success('Editado com Sucesso!');
            return redirect()->route('admin.teachers.edit', ['id' => $id]);

        } catch (Exception $err) {

            toastr()->error('Não foi possível Editar os dados!')
                    ->warning($err->getMessage());
            return redirect()->route('admin.teachers.edit', ['id' => $id]);

        }

    }

    public function destroy($id)
    {
        try {

            $teacher = User::FindOrfail($id);
            $teacher->delete();

            toastr()->success('Removido com Sucesso!');
            return redirect()->route('admin.teachers.index');

        } catch (Exception $err) {

            toastr()->error('Não foi possível Remover os dados!')
                    ->warning($err->getMessage());
            return redirect()->route('admin.teachers.index');

        }

    }
}

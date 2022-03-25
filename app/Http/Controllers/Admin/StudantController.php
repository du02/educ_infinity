<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mockery\Exception;

class StudantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = Auth::id();
        $studants = User::where('roles', 'STUDANT')
                        ->where('reference_id_admin', $admin)
                        ->get();

        return view('admin.studants.studant_list', compact('studants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admin = Auth::id();

        return view('admin.studants.studant_create', compact('admin'));
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
            $data['password'] = bcrypt($data['password']);

            $studants = new User();
            $studants->create($data);

            toastr()->success('Salvo com Sucesso!');
            return redirect()->route('admin.studants.index');

        } catch (Exception $err) {
            toastr()->error('Não foi possível adicionar os dados!')
                    ->warning($err->getMessage());
            return redirect()->route('admin.studants.index');

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
        $admin = Auth::id();
        $studant = User::find($id);

        return view('admin.studants.studant_edit', compact('studant', 'admin'));
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
        try {
            $data = $request->all();

            if($data['password']) {
                $data['password'] = bcrypt($data['password']);
            }

            $studant = User::findOrfail($id);
            $studant->update($data);

            toastr()->success('Editado com Sucesso!');
            return redirect()->route('admin.studants.edit', ['id' => $id]);

        } catch (Exception $err) {

            toastr()->error('Não foi possível Editar os dados!')
                    ->warning($err->getMessage());
            return redirect()->route('admin.studants.edit', ['id' => $id]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {

            $studant = User::FindOrfail($id);
            $studant->delete();

            toastr()->success('Removido com Sucesso!');
            return redirect()->route('admin.studants.index');

        } catch (Exception $err) {

            toastr()->error('Não foi possível Remover os dados!')
                    ->warning($err->getMessage());
            return redirect()->route('admin.studants.index');

        }
    }
}

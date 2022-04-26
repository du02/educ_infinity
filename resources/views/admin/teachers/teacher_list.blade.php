@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="mb-2">
            <a class="my-btn-add btn border border-dark" href="{{ route('admin.teachers.create') }}">
                <i class="fa-solid fa-plus"></i>
                Adicionar Professor
            </a>
        </div>

        <div class="card border-dark my-shadow">
            <div class="card-header border-bottom border-dark">
                <h4 class="mt-2">Listagem de Professores</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-borderless table-hover">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Cargos</th>
                                <th scope="col">Turma</th>
                                <th scope="col" class="text-center">Ações</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($teachers as $teacher)
                                <tr>
                                    <th scope="row" class="text-center">{{ $loop->iteration }}</th>
                                    <td>{{ $teacher->name }}</td>
                                    <td>{{ $teacher->roles }}</td>
                                    <td>{{ $teacher->class }}º Ano</td>
                                    <td class="text-center">
                                        <a class="btn my-btn-edit border border-dark mr-1" href="{{ route('admin.teachers.edit', $teacher->id), '/edit' }}"><i class="fa-solid fa-pen-to-square mr-2"></i>Editar</a>
                                        <a id="deleteOption" class="btn my-btn-delete border border-dark ml-1" href="{{ route('admin.teachers.destroy', $teacher->id), '/remove' }}"><i class="fa-solid fa-trash mr-2"></i>Excluir</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        {{ $teachers->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="mb-2">
            <a class="my-btn-add btn border border-dark" href="{{ route('admin.questions.create') }}">
                <i class="fa-solid fa-plus"></i>
                Adicionar Questões
            </a>
        </div>

        <div class="card border-dark my-shadow">
            <div class="card-header border-bottom border-dark">
                <h4 class="mt-2">Listagem de Questões</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-borderless table-hover ">
                        <thead class="">
                        <tr>
                            <th scope="col" class="text-center">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Último</th>
                            <th scope="col">Último</th>
                            <th scope="col">Último</th>
                            <th scope="col">Nickname</th>
                            <th scope="col" class="text-center"></th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" class="text-center">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td class="text-right">
                                    <a class="btn my-btn-edit border border-dark mr-1" href=""><i class="fa-solid fa-pen-to-square mr-2"></i>Editar</a>
                                    <a class="btn my-btn-delete border border-dark ml-1" href=""><i class="fa-solid fa-trash mr-2"></i>Excluir</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card border-dark my-shadow">
                    <div class="card-header">{{ __('Usuários') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">E-mail</th>
                                    <th scope="col">Cargo</th>
                                    <th scope="col">Ações</th>
                                </tr>
                                </thead>
                                <tbody>
                                {{--
                                    @foreach($users as $user)
                                        <tr>
                                            <th scope="row">{{ $user->id }}</th>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->roles }}</td>
                                            <td>
                                                <a class="btn my-btn-edit border border-dark mr-1" href=""><i class="fa-solid fa-pen-to-square mr-2"></i>Editar</a>
                                                <a class="btn my-btn-delete border border-dark ml-1" href=""><i class="fa-solid fa-trash mr-2"></i>Excluir</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

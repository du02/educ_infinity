@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row card border border-dark mt-4 my-shadow">
            <div class="d-flex align-items-center card-header card-header-color mb-3 border-bottom border-dark">
                <h4 class="ml-2 mt-2">Perfil</h4>
            </div>
            <div class="card-body">
                <div class="border border-dark p-3 mb-1">
                    NOME: <o class="font-weight-bold">{{ $data[0]->name }}</o>
                    <br>
                    CPF: <o class="font-weight-bold">{{ $data[0]->cpf }}</o>
                    <br>
                    DATA DE NASCIMENTO: <o class="font-weight-bold">{{ $data[0]->birth_date }}</o>
                </div>
                <div class="border border-dark p-3 mb-1">
                    FILIAÇÃO:
                    <br>
                    <o class="font-weight-bold">{{ $data[0]->mother }}</o>
                    <br>
                    <o class="font-weight-bold">{{ $data[0]->father }}</o>
                    <br>
                </div>
                <div class="border border-dark p-3 mb-1">
                    TURMA: <o class="font-weight-bold">{{ $data[0]->class }}</o> ºANO
                </div>
            </div>
        </div>
    </div>
@endsection


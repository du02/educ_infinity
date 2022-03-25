@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row card border border-dark mt-4 my-shadow">
            <div class="d-flex align-items-center card-header card-header-color mb-3 border-bottom border-dark">
                <i class="fa-solid fa-pen-to-square"></i>
                <h4 class="ml-2 mt-2">Editar Aluno(a)</h4>
            </div>
            <div class="body m-4">
                <form class="needs-validation" action="{{ route('admin.studants.update', $studant->id) }}" method="POST">
                    @csrf
                    <input
                        type="hidden"
                        value="{{ $admin }}"
                        name="reference_id_admin">

                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom01">Nome Completo *</label>
                            <input
                                name="name"
                                type="text"
                                class="form-control border-dark"
                                id="validationCustom01"
                                placeholder="Nome"
                                required
                                value="{{ $studant->name }}"
                            >
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="validationCustom02">CPF *</label>
                            <input
                                name="cpf"
                                type="text"
                                class="form-control border-dark"
                                id="validationCustom02"
                                placeholder="000.000.000-00"
                                required
                                value="{{ $studant->cpf }}"
                            >
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="validationCustom04">Cargo</label>
                            <select name="class" id="inputEstado" class="form-control border-dark">
                                <option value="6" @if($studant->class === '6') selected @endif>6º Ano</option>
                                <option value="7" @if($studant->class === '7') selected @endif>7º Ano</option>
                                <option value="8" @if($studant->class === '8') selected @endif>8º Ano</option>
                                <option value="9" @if($studant->class === '9') selected @endif>9º Ano</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustomUsername">Data de Nascimento *</label>
                            <div class="input-group">
                                <input
                                    name="birth_date"
                                    type="date"
                                    class="form-control border-dark"
                                    id="validationCustomUsername"
                                    placeholder="DD/MM/AAAA"
                                    aria-describedby="inputGroupPrepend"
                                    required
                                    value="{{ $studant->birth_date }}"
                                >
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom03">Nome da Mãe *</label>
                            <input
                                name="mother"
                                type="text"
                                class="form-control border-dark"
                                id="validationCustom03"
                                placeholder="Nome da Mãe"
                                required
                                value="{{ $studant->mother }}"
                            >
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom04">Nome do Pai</label>
                            <input
                                name="father"
                                type="text"
                                class="form-control border-dark"
                                id="validationCustom04"
                                placeholder="Nome do Pai"
                                required
                                value="{{ $studant->father }}"
                            >
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-2 mb-3">
                            <label for="validationCustom04">Cargo</label>
                            <select name="roles" id="inputEstado" class="form-control border-dark">
                                <option value="STUDANT" @if($studant->roles === 'STUDANT') selected @endif>Aluno(a)</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom04">E-mail</label>
                            <input
                                name="email"
                                type="email"
                                class="form-control border-dark"
                                id="validationCustom04"
                                placeholder="E-mail"
                                required
                                value="{{ $studant->email }}"
                            >
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="validationCustom04">Senha <i>(necessário para editar)*</i></label>
                            <input
                                name="password"
                                type="password"
                                class="form-control border-dark"
                                id="validationCustom04"
                                placeholder="Senha"
                                required
                                value="{{-- $studant->password --}}"
                            >
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="validationCustom04">Repetir Senha*</label>
                            <input
                                name="password_confirmation"
                                type="password"
                                class="form-control border-dark"
                                id="validationCustom04"
                                placeholder="Confirma a senha"
                                required
                                value="{{-- $studant->password --}}"
                            >
                        </div>
                    </div>

                    <div class="d-flex justify-content-between mt-5">
                        <div class="row ml-1">
                            <a class="btn my-btn-return border border-dark font-weight-bold" href="{{ route('admin.studants.index') }}">
                                <i class="fa-solid fa-arrow-left"></i>
                                Voltar
                            </a>
                        </div>
                        <div class="row mr-1">
                            <button type="submit" class="btn my-btn-add border border-dark mr-1 font-weight-bold">
                                <i class="fa-solid fa-floppy-disk"></i>
                                Salvar
                            </button>
                            <a class="btn my-btn-delete border border-dark ml-1 font-weight-bold"
                               href="{{ route('admin.studants.index') }}">
                                <i class="fa-solid fa-xmark"></i>
                                Cancelar
                            </a>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection

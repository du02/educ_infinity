@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row card border border-dark mt-4 my-shadow">
            <div class="d-flex align-items-center card-header card-header-color mb-3 border-bottom border-dark">
                <i class="fa-solid fa-plus"></i>
                <h4 class="ml-2 mt-2">Criar novo Professor</h4>
            </div>
            <div class="body m-4">
                <form class="needs-validation" action="{{ route('admin.teacher.store') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom01">Nome Completo *</label>
                            <input name="name" type="text" class="form-control border-dark" id="validationCustom01" placeholder="Nome" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom02">CPF *</label>
                            <input name="cpf" type="text" class="form-control border-dark" id="validationCustom02" placeholder="000.000.000-00" required>

                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustomUsername">Data de Nascimento *</label>
                            <div class="input-group">
                                <input name="birth_date" type="date" class="form-control border-dark" id="validationCustomUsername"
                                       placeholder="DD/MM/AAAA" aria-describedby="inputGroupPrepend" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom03">Nome da Mãe *</label>
                            <input name="mother" type="text" class="form-control border-dark" id="validationCustom03" placeholder="Nome da Mãe"
                                   required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom04">Nome do Pai</label>
                            <input name="father" type="text" class="form-control border-dark" id="validationCustom04" placeholder="Nome do Pai"
                                   required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom04">Cargo</label>
                            <select name="roles" id="inputEstado" class="form-control border-dark">
                                <option value="TEACHER">Professor(a)</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom04">E-mail</label>
                            <input name="email" type="email" class="form-control border-dark" id="validationCustom04" placeholder="E-mail"
                                   required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom04">Senha</label>
                            <input name="password" type="password" class="form-control border-dark" id="validationCustom04" placeholder="Crie a senha"
                                   required>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between mt-5">
                        <div class="row ml-1">
                            <a class="btn my-btn-return border border-dark font-weight-bold" href="{{ route('admin.teacher.index') }}">
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
                               href="{{ route('admin.teacher.index') }}">
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

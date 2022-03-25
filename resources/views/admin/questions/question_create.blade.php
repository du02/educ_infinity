@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row card border border-dark mt-4 my-shadow">
            <div class="d-flex align-items-center card-header card-header-color mb-3 border-bottom border-dark">
                <i class="fa-solid fa-plus"></i>
                <h4 class="ml-2 mt-2">Adicionar Questões</h4>
            </div>
            <div class="body m-4">
                <form class="needs-validation" action="{{-- route('admin.question.store') --}}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom01">Digite o conteúdo da questão *</label>
                            <textarea name="content_question" class="form-control border-dark"
                                      id="exampleFormControlTextarea1" rows="12" required></textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Digite as opções das questões *</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text border-dark">A</div>
                                </div>
                                <input name="option_question_a" type="text" class="form-control border-dark"
                                       id="inlineFormInputGroup">
                            </div>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text border-dark">B</div>
                                </div>
                                <input name="option_question_b" type="text" class="form-control border-dark"
                                       id="inlineFormInputGroup">
                            </div>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text border-dark">C</div>
                                </div>
                                <input name="option_question_c" type="text" class="form-control border-dark"
                                       id="inlineFormInputGroup">
                            </div>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text border-dark">D</div>
                                </div>
                                <input name="option_question_d" type="text" class="form-control border-dark"
                                       id="inlineFormInputGroup">
                            </div>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text border-dark">E</div>
                                </div>
                                <input name="option_question_e" type="text" class="form-control border-dark"
                                       id="inlineFormInputGroup">
                            </div>

                            <div class="">
                                <label>Selecione a questão correta *</label>
                                <div class="form-group">
                                    <select name="question_correct" class="custom-select border-dark" required>
                                        <option value="1" selected>A</option>
                                        <option value="2">B</option>
                                        <option value="3">C</option>
                                        <option value="4">D</option>
                                        <option value="5">E</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label>Dificuldade *</label>
                            <div class="form-group">
                                <select name="question_difficulty" class="custom-select border-dark" required>
                                    <option value="1" selected>Fácil</option>
                                    <option value="2">Médio</option>
                                    <option value="3">Difícil</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Selecione a matéria dessa questão *</label>
                            <div class="form-group">
                                <select name="question_difficulty" class="custom-select border-dark" required>
                                    <option value="port" selected>Português</option>
                                    <option value="mat">Matemática</option>
                                    <option value="cien">Ciências</option>
                                    <option value="hist">História</option>
                                    <option value="geo">Geográfia</option>
                                    <option value="ing">Inglês</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label>Selecione o aquivo de imagem, caso queira</label>
                            <div class="custom-file">
                                <input name="question_img" type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label border-dark" for="customFile">Escolher a imagem</label>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between mt-5">
                        <div class="row ml-1">
                            <a class="btn my-btn-return border border-dark font-weight-bold" href="{{-- route('admin.question.index') --}}">
                                <i class="fa-solid fa-arrow-left"></i>
                                Voltar
                            </a>
                        </div>
                        <div class="row mr-1">
                            <button type="submit" class="btn my-btn-add border border-dark mr-1 font-weight-bold">
                                <i class="fa-solid fa-floppy-disk"></i>
                                Salvar
                            </button>
                            <a class="btn my-btn-delete border border-dark ml-1 font-weight-bold" href="{{-- route('admin.question.index') --}}">
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

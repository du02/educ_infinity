@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row card border border-dark mt-4 my-shadow">
            <div class="d-flex align-items-center card-header card-header-color mb-3 border-bottom border-dark">
                <i class="fa-solid fa-plus"></i>
                <h4 class="ml-2 mt-2">Adicionar Questões</h4>
            </div>
            <div class="body m-4">
                <form enctype="multipart/form-data" class="needs-validation" action="{{ route('teacher.questions.update', $question->id) }}" method="POST">
                    @csrf
                    <input
                        type="hidden"
                        value="{{ $userID }}"
                        name="reference_id"
                    >
                    <input
                        type="hidden"
                        value="{{ $question->code_question }}"
                        name="code_question"
                    >
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom01">Digite o conteúdo da questão *</label>
                            <textarea
                                name="content_question"
                                class="form-control border-dark"
                                id="exampleFormControlTextarea1"
                                rows="12"
                                required>
                                {{ $question->content_question }}
                            </textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Digite as opções das questões *</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text border-dark">A</div>
                                </div>
                                <input
                                    name="option_question_a"
                                    type="text"
                                    class="form-control border-dark"
                                    id="inlineFormInputGroup"
                                    value="{{ $question->option_question_a }}"
                                >
                            </div>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text border-dark">B</div>
                                </div>
                                <input
                                    name="option_question_b"
                                    type="text"
                                    class="form-control border-dark"
                                    id="inlineFormInputGroup"
                                    value="{{ $question->option_question_b }}"
                                >
                            </div>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text border-dark">C</div>
                                </div>
                                <input
                                    name="option_question_c"
                                    type="text"
                                    class="form-control border-dark"
                                    id="inlineFormInputGroup"
                                    value="{{ $question->option_question_c }}"
                                >
                            </div>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text border-dark">D</div>
                                </div>
                                <input
                                    name="option_question_d"
                                    type="text"
                                    class="form-control border-dark"
                                    id="inlineFormInputGroup"
                                    value="{{ $question->option_question_d }}"
                                >
                            </div>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text border-dark">E</div>
                                </div>
                                <input
                                    name="option_question_e"
                                    type="text"
                                    class="form-control border-dark"
                                    id="inlineFormInputGroup"
                                    value="{{ $question->option_question_e }}"
                                >
                            </div>

                            <div class="">
                                <label>Selecione a questão correta *</label>
                                <div class="form-group">
                                    <select name="question_correct" class="custom-select border-dark" required>
                                        <option value="A" @if( $question->question_correct === 'A') selected @endif>A</option>
                                        <option value="B" @if( $question->question_correct === 'B') selected @endif>B</option>
                                        <option value="C" @if( $question->question_correct === 'C') selected @endif>C</option>
                                        <option value="D" @if( $question->question_correct === 'D') selected @endif>D</option>
                                        <option value="E" @if( $question->question_correct === 'E') selected @endif>E</option>
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
                                    <option value="EASY"    @if( $question->question_difficulty === 'EASY') selected @endif>Fácil</option>
                                    <option value="MEDIUM"  @if( $question->question_difficulty === 'MEDIUM') selected @endif>Médio</option>
                                    <option value="HARD"    @if( $question->question_difficulty === 'HARD') selected @endif>Difícil</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Selecione a matéria dessa questão *</label>
                            <div class="form-group">
                                <select name="question_subjects" class="custom-select border-dark" required>
                                    <option value="POR" @if( $question->question_subjects === 'POR') selected @endif>Português</option>
                                    <option value="MAT" @if( $question->question_subjects === 'MAT') selected @endif>Matemática</option>
                                    <option value="CIE" @if( $question->question_subjects === 'CIE') selected @endif>Ciências</option>
                                    <option value="HIS" @if( $question->question_subjects === 'HIS') selected @endif>História</option>
                                    <option value="GEO" @if( $question->question_subjects === 'GEO') selected @endif>Geográfia</option>
                                    <option value="ING" @if( $question->question_subjects === 'ING') selected @endif>Inglês</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label>Selecione o aquivo de imagem, caso queira</label>
                            <div class="custom-file">
                                <input
                                    name="question_img"
                                    type="file"
                                    class="custom-file-input"
                                    id="customFile"
                                    value="{{ $question->question_img }}"
                                >
                                <label class="custom-file-label border-dark" for="customFile">Escolher a imagem</label>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between mt-5">
                        <div class="row ml-1">
                            <a class="btn my-btn-return border border-dark font-weight-bold" href="{{ route('teacher.questions.index') }}">
                                <i class="fa-solid fa-arrow-left"></i>
                                Voltar
                            </a>
                        </div>
                        <div class="row mr-1">
                            <button type="submit" class="btn my-btn-add border border-dark mr-1 font-weight-bold">
                                <i class="fa-solid fa-floppy-disk"></i>
                                Salvar
                            </button>
                            <a class="btn my-btn-delete border border-dark ml-1 font-weight-bold" href="{{ route('teacher.questions.index') }}">
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


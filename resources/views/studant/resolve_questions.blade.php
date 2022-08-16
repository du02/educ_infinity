@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card border-dark my-shadow">
                    <div class="card-body mt-5 mb-5">
                        <div class="d-flex">
                            <div class="col-md-12">
                                <div class="d-flex justify-content-between border-bottom border-dark">
                                    <img
                                        class="old-lady-dialog ml-1"
                                        src="{{ asset('assets/img/icon/games/old_lady/legend2.svg') }}"
                                        alt="dialog"
                                    >
                                    <h2 class="font-weight-bold mt-4">Missão Diária</h2>

                                    <img
                                        class="avatar-mission mr-1"
                                        src="{{
                                            asset('assets/img/icon/games/avatars-mini/avatar-' . $myAvatar[0]->character_id . '.png') }}"
                                        alt="avatar"
                                    >

                                </div>

                                <form action="{{ route('studant.questionsResolve') }}" method="post">
                                    @csrf
                                    @foreach($questions as $q)
                                        <div class="col-md-12 mb-3 mt-3">
                                            <input
                                                type="hidden"
                                                name="code_question_{{ $loop->iteration }}"
                                                value="{{ $q->code_question }}"
                                            >
                                            <label for="">
                                                <n class="font-weight-bold">
                                                    {{ $loop->iteration }} )
                                                </n>

                                                {{ $q->content_question }}
                                            </label>
                                        </div>
                                        <div class="col-md-12">
                                            <p>A - {{ $q->option_question_a }}</p>
                                            <p>B - {{ $q->option_question_b }}</p>
                                            <p>C - {{ $q->option_question_c }}</p>
                                            <p>D - {{ $q->option_question_d }}</p>
                                            <p>E - {{ $q->option_question_e }}</p>
                                            <p
                                                class="invisible border border-success font-weight-bold"
                                                id="question_on_{{ $loop->iteration }}"
                                            >
                                                RESPOSTA CORRETA É: {{$q->question_correct}}
                                            </p>
                                        </div>
                                        <div class="col-md-12 mb-3 row justify-content-end">
                                            <div class="">
                                                <label>Selecione sua resposta *</label>
                                                <div id="you_response_{{$loop->iteration}}" class="font-weight-bold"></div>
                                                <div class="form-group">
                                                    <select
                                                        id="value_response_{{ $loop->iteration }}"
                                                        class="custom-select border-dark" required
                                                        name="question_response_{{ $loop->iteration }}">
                                                        <option value="A">A</option>
                                                        <option value="B">B</option>
                                                        <option value="C">C</option>
                                                        <option value="D">D</option>
                                                        <option value="E">E</option>
                                                    </select>
                                                    <button
                                                        id="confirm_value_{{ $loop->iteration }}"
                                                        class="btn my-btn-login-one border border-dark mt-1 font-weight-bold col-md-12"
                                                    >Responder</button>
                                                </div>
                                            </div>
                                        </div>
                                        <input
                                            type="hidden"
                                            name="resolve_{{ $loop->iteration }}"
                                            value="{{ $q->question_correct }}"
                                        >
                                        <hr class="mt-3">
                                    @endforeach

                                    <div class="row mr-1 mb-3 justify-content-end">
                                        <button type="submit" class="btn my-btn-add border border-dark mr-1 font-weight-bold">
                                            <i class="fa-solid fa-floppy-disk"></i>
                                            Enviar
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


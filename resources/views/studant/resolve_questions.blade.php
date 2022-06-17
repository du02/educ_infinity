@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card border-dark my-shadow">
                    <div class="card-body mt-5 mb-5">
                        <div class="d-flex">
                            <div class="col-md-2">
                                <button class="btn my-btn-add border border-dark">Iniciar Missão</button>
                            </div>
                            <div class="col-md-10 border border-dark">
                                <div class="d-flex justify-content-between border-bottom border-dark">
                                    <img
                                        class="old-lady-dialog"
                                        src="{{ asset('assets/img/icon/games/old_lady/legend2.svg') }}"
                                        alt="dialog"
                                    >
                                    <h2 class="font-weight-bold mt-4">Missão Diária</h2>
                                    <img
                                        class="avatar-mission"
                                        src="{{
                                            asset('assets/img/icon/games/avatars-mini/avatar-' . $myAvatar[0]->character_id . '.png') }}"
                                        alt="avatar"
                                    >
                                </div>
                                asdasd


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

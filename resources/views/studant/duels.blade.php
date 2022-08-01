@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card border-dark my-shadow">
                    <div class="card-header">
                        <div class="row mb-3 justify-content-start">
                            <button
                                class="btn my-btn-add border border-dark mr-1 font-weight-bold"
                                name="seek-duel"
                                id="seek-duel"
                            >Procurar Duelo</button>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row justify-content-around">
                            <div>
                                <h3 class="text-center font-weight-bold">Seu Personagem</h3>
                                <div class="mr-2">
                                    <img
                                        width="250rem"
                                        class="mb-3"
                                        src="{{ '../assets/img/cards/my-character/my-character-' . $data['challenged'][0]->character_id . '.png' }}"
                                        alt="avatar-you"
                                    >
                            </div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="ml-2">
                                <div>
                                    <h3 class="text-center font-weight-bold">Oponente</h3>
                                    <img
                                        width="250rem"
                                        class="mb-3"
                                        src="{{ '../assets/img/cards/my-character/my-character-' . $data['opponent'][0]->character_id . '.png' }}"
                                        alt="avatar-opponent"
                                    >
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5">
                            <button
                                class="btn my-btn-add border border-dark mr-1 font-weight-bold btn-lg btn-block"
                                name="duel"
                                id="duel"
                            >DUELAR!</button>
                        </div>
                        <div class="console mt-3 " id="console">
                            <p>[Seu Personagem] - Tirou 20 de dano</p>
                            <p>[Seu Oponente] - Bloqueou -10 de dano</p>
                            <p>[Seu Personagem] - Tirou 20 de dano</p>
                            <p>[Seu Oponente] - Bloqueou -10 de dano</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

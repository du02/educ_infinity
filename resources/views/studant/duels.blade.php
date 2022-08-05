@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card border-dark my-shadow">
                    <div class="card-header">
                        <!--
                        <div class="row mb-3 justify-content-start">
                            <button
                                class="btn my-btn-add border border-dark mr-1 font-weight-bold"
                                name="seek-duel"
                                id="seek-duel"
                            >Procurar Duelo</button>
                        </div>
                        -->
                        Duelo entre...
                     </div>

                    <div class="card-body">
                        <div>
                            <form>
                               <div class="row justify-content-around">

                                   <div id="challenged">
                                       <h3 class="text-center font-weight-bold">{{ Auth::user()->name }}</h3>
                                       <p class="text-center mt-0">Seu personagem</p>
                                       <div class="mr-2">
                                           <img
                                               width="250rem"
                                               class="mb-3"
                                               src="{{ '../assets/img/cards/my-character/my-character-' . $data['challenged'][0]->character_id . '.png' }}"
                                               alt="avatar-you"
                                           >
                                       </div>

                                       <div id="data-challenged">
                                           <input type="hidden" id="challenged-studant-id" value="{{ $data['challenged'][0]->studant_id }}">
                                           <input type="hidden" id="challenged-power" value="{{ $data['challenged'][0]->power }}">
                                           <input type="hidden" id="challenged-attack" value="{{ $data['challenged'][0]->attack }}">
                                           <input type="hidden" id="challenged-vitality" value="{{ $data['challenged'][0]->vitality }}">
                                           <input type="hidden" id="challenged-critical" value="{{ $data['challenged'][0]->critical }}">
                                           <input type="hidden" id="challenged-luck" value="{{ $data['challenged'][0]->luck }}">
                                           <input type="hidden" id="challenged-armor" value="{{ $data['challenged'][0]->armor }}">
                                           <input type="hidden" id="challenged-points" value="{{ $data['challenged'][0]->points }}">
                                       </div>

                                       <div class="progress border border-danger">
                                           <div
                                               id="progress-bar-challenged"
                                               class="progress-bar bg-danger progress-bar-chal"
                                               role="progressbar"
                                               aria-valuenow="{{ $data['challenged'][0]->vitality }}"
                                               aria-valuemin="0"
                                               aria-valuemax="{{ $data['challenged'][0]->vitality }}">
                                           </div>
                                       </div>
                                   </div>
                                   <div class="ml-2" id="opponent">
                                       <div>
                                           <h3 class="text-center font-weight-bold">{{ $data['name_opponent'][0]->name }}</h3>
                                           <p class="text-center mt-0">Oponente</p>
                                           <img
                                               width="250rem"
                                               class="mb-3"
                                               src="{{ '../assets/img/cards/my-character/my-character-' . $data['opponent'][0]->character_id . '.png' }}"
                                               alt="avatar-opponent"
                                           >
                                       </div>

                                       <div id="data-opponent">
                                           <input type="hidden" id="opponent-studant-id" value="{{ $data['opponent'][0]->studant_id }}">
                                           <input type="hidden" id="opponent-power" value="{{ $data['opponent'][0]->power }}">
                                           <input type="hidden" id="opponent-attack" value="{{ $data['opponent'][0]->attack }}">
                                           <input type="hidden" id="opponent-vitality" value="{{ $data['opponent'][0]->vitality }}">
                                           <input type="hidden" id="opponent-critical" value="{{ $data['opponent'][0]->critical }}">
                                           <input type="hidden" id="opponent-luck" value="{{ $data['opponent'][0]->luck }}">
                                           <input type="hidden" id="opponent-armor" value="{{ $data['opponent'][0]->armor }}">
                                           <input type="hidden" id="opponent-points" value="{{ $data['opponent'][0]->points }}">
                                       </div>

                                       <div class="progress border border-danger">
                                           <div
                                               id="progress-bar-opponent"
                                               class="progress-bar bg-danger progress-bar-oppo"
                                               role="progressbar"
                                               aria-valuenow="{{ $data['opponent'][0]->vitality }}"
                                               aria-valuemin="0"
                                               aria-valuemax="{{ $data['opponent'][0]->vitality }}">
                                           </div>
                                       </div>
                                   </div>
                               </div>
                                <div class="mt-5">
                                    <button
                                        class="btn my-btn-add border border-dark mr-1 font-weight-bold btn-lg btn-block"
                                        name="button-duel"
                                        id="button-duel"
                                    >
                                        DUELAR!
                                    </button>

                                    <button
                                        class="invisible btn my-btn-login-one border border-dark mr-1 font-weight-bold btn-lg btn-block"
                                        name="button-reload"
                                        id="button-reload-duel"
                                    >
                                        DUELAR NOVAMENTE
                                    </button>
                            </form>

                        </div>

                        <!--
                        <div class="console mt-3 " id="console">
                            <p>[Seu Personagem] - Tirou 20 de dano</p>
                            <p>[Seu Oponente] - Bloqueou -10 de dano</p>
                            <p>[Seu Personagem] - Tirou 20 de dano</p>
                            <p>[Seu Oponente] - Bloqueou -10 de dano</p>
                        </div>
                        -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="resultDuelModal" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="d-flex justify-content-center ">
                        <img src="{{ '../assets/img/icon/games/attack.png' }}" alt="" class="img-modal">
                    </div>

                    <h2 id="text-result" class="text-center mb-5"></h2>
                </div>
            </div>
        </div>
    </div>
@endsection

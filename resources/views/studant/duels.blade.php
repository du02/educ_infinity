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

                                       <div class="progress">
                                           <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
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

                                       <div class="progress">
                                           <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
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
                                </div>
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
@endsection

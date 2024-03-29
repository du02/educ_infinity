@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-sm-12">
                <div class="card border-dark my-shadow">
                    <div class="card-header">{{ __('Meu personagem') }}</div>
                    <div class="card-body">
                        <div id="img-character" class="row justify-content-center">
                            <img
                                width="250rem"
                                class=""
                                src="{{ '../assets/img/cards/my-character/my-character-' . $myCharacter[0]->character_id . '.png' }}"
                                alt="avatar"
                            >
                        </div>

                       <div class="">
                           <div class="ml-2 mt-3">
                               <h5>Status:</h5>
                               <div class="table-responsive">
                                   <table class="table border shadow">
                                       <thead class="font-weight-bold text-center">
                                       <td>
                                           <img
                                               width="40rem"
                                               class="img-fluid"
                                               src="{{ asset('/assets/img/icon/games/first_t.png') }}"
                                               alt="avatar"
                                           >
                                           Poder
                                       </td>
                                       <td>
                                           <img
                                               width="40rem"
                                               class="img-fluid"
                                               src="{{ asset('/assets/img/icon/games/attack.png') }}"
                                               alt="avatar"
                                           >
                                           Ataque
                                       </td>
                                       <td>
                                           <img
                                               width="40rem"
                                               class="img-fluid"
                                               src="{{ asset('/assets/img/icon/games/health.png') }}"
                                               alt="avatar"
                                           >
                                           Vitalidade
                                       </td>
                                       <td>
                                           <img
                                               width="40rem"
                                               class="img-fluid"
                                               src="{{ asset('/assets/img/icon/games/critical.png') }}"
                                               alt="avatar"
                                           >
                                           Critico
                                       </td>
                                       <td>
                                           <img
                                               width="40rem"
                                               class="img-fluid"
                                               src="{{ asset('/assets/img/icon/games/book.png') }}"
                                               alt="avatar"
                                           >
                                           Sorte
                                       </td>
                                       <td>
                                           <img
                                               width="40rem"
                                               class="img-fluid"
                                               src="{{ asset('/assets/img/icon/games/block.png') }}"
                                               alt="avatar"
                                           >
                                           Armadura
                                       </td>
                                       </thead>
                                       <tbody class="text-center">
                                       <tr>
                                           <td>{{ $myCharacter[0]->power }}</td>
                                           <td>{{ $myCharacter[0]->attack }}</td>
                                           <td>{{ $myCharacter[0]->vitality }}</td>
                                           <td>{{ $myCharacter[0]->critical }}</td>
                                           <td>{{ $myCharacter[0]->luck }}</td>
                                           <td>{{ $myCharacter[0]->armor }}</td>
                                       </tr>
                                       </tbody>
                                   </table>
                               </div>
                           </div>

                           <div class="ml-2 table-responsive">
                               <table class="table border shadow">
                                   <thead class="font-weight-bold text-center">
                                   <td>Pont. Poder</td>
                                   <td>Pont. Questões</td>
                                   <td>Pont. Classificação</td>
                                   </thead>
                                   <tbody class="text-center">
                                   <tr>
                                       <td>{{ $myCharacter[0]->power }}</td>
                                       <td>{{ $myCharacter[0]->points }}</td>
                                       <td>{{ $myCharacter[0]->fight }}</td>
                                   </tr>
                                   </tbody>
                               </table>
                           </div>

                           <div class="ml-2 mt-3 table-responsive">
                               <h5>Inventário:</h5>
                               <table class="table border shadow">
                                   <thead class="font-weight-bold text-center">
                                        <td>Itens</td>
                                   </thead>
                                   <tbody class="text-center">
                                       <tr>


                                       </tr>
                                   </tbody>
                               </table>
                           </div>

                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




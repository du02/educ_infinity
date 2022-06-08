<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/toastr.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/global.css') }}" rel="stylesheet">

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <div id="app" class="app-character mt-5">
        <div class="text-center">
            <h1>ESCOLHA SEU PERSONAGEM</h1>
            <p>Esse personagem ti seguira em sua jornada, escolha bem.</p>
        </div>
        <div id="img-character" class="mt-3">
            <img src="{{ asset('assets/img/cards/characters/character-1.png') }}" alt="">
        </div>
        <div class="form-character">
            <form action="{{ route('studant.character.selected') }}" method="post">
                @csrf
                    <input
                        type="hidden"
                        value="1"
                        name="access">
                    <input
                        type="hidden"
                        value="{{ $user }}"
                        name="studant_id">
                    <div>
                    <input
                        type="hidden"
                        value="230"
                        name="power">
                    <input
                        type="hidden"
                        value="10"
                        name="attack">
                    <input
                        type="hidden"
                        value="100"
                        name="vitality">
                    <input
                        type="hidden"
                        value="10"
                        name="critical">
                    <input
                        type="hidden"
                        value="10"
                        name="luck">
                     <input
                         type="hidden"
                         value="100"
                         name="armor">

                    <select class="my-character-selected" id="id-character" name="character_id">
                        <option value="1">Guerreiro</option>
                        <option value="2">Doutor</option>
                        <option value="3">Elfa</option>
                        <option value="4">Espadachim</option>
                        <option value="5">Maga</option>
                    </select>
                </div>
                <div>
                    <input type="submit" value="Escolher">
                </div>
            </form>
        </div>
    </div>
</body>
    <script src="{{ asset('js/jquery_3_1_1.min.js') }}"></script>
    <script src="{{ asset('js/selected_character.js') }}"></script>
</html>

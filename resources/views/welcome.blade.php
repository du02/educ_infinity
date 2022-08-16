<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 30px;
            }

            .top-left {
                position: absolute;
                left: 10px;
                top: 18px;
            }

            .logo {
                width: 60px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                padding: 10px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            h2 {
                margin-top: 100px;
                color: #352D42;
            }
            .footer {
                position: absolute;
                bottom: 5px;
            }

            .login {
                border: 1px solid #636b6f;
                border-radius: 5px;
                background-color: #636b6f;
                color: #fff;
            }
            .sub {
                margin-right: 15px;
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-left">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('assets/img/logo/logo.png') }}" class="logo" alt="Logo">
                    </a>
                </div>
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="sub">Como jogar</a>
                        <a href="{{ route('login') }}" class="login">Login</a>

                        @php
                            /*
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Criar Conta</a>
                            @endif
                            */
                        @endphp
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="hero">
                    <div>
                        <img src="{{ asset('assets/img/logo/logo.png') }}" class="" alt="Logo">
                        <h2>
                            AQUI VOCÊ REVISA O CONTÉUDO
                            <br>
                            ESCOLAR E JOGA AO
                            <br>
                            MESMO TEMPO!
                        </h2>
                    </div>
                </div>

                <div class="footer">
                    Todos direitos reservados ao desenvolvedor | Unicesumar - Eduardoo Ferreira
                </div>
            </div>
        </div>
    </body>
</html>

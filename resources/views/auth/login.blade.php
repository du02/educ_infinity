@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-4">
                <div class="card border-dark my-shadow">
                    <div class="card-header text-center border-dark">
                        <h4 class="mt-3 font-weight-bold">LOGIN</h4>
                        <p>Admin | Aluno | Professor</p>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <div class="col input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text border-dark">
                                            <i class="fa-solid fa-at"></i>
                                        </div>
                                    </div>
                                    <input id="email" type="email" class="form-control border-dark @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text border-dark">
                                            <i class="fa-solid fa-key"></i>
                                        </div>
                                    </div>
                                    <input id="password" type="password" class="form-control border-dark @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Lembrar de mim') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col">
                                    <button type="submit" class="my-btn-login-one btn border-dark btn-block p-3 font-weight-bold">
                                        {{ __('LOGIN') }}
                                    </button>
                                    <div class="row mt-2 justify-content-between">
                                        <a class="btn btn-link" href="{{ url('/') }}">
                                            <i class="fa-solid fa-arrow-left-long"></i> {{ __('Home') }}
                                        </a>

                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Esqueceu a senha?') }} <i class="fa-solid fa-arrow-right-long"></i>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

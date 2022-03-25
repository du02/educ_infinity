@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-4">
                <div class="card border-dark shadow">
                    <div class="card-header text-center border-dark">
                        <h4 class="mt-3 font-weight-bold">CRIAR NOVA CONTA</h4>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('Nome') }}</label>

                                <div class="col">
                                    <input id="name" type="text" class="form-control border-dark @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                                <div class="col">
                                    <input id="email" type="email" class="form-control border-dark @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-3 col-form-label text-md-right">{{ __('Senha') }}</label>

                                <div class="col">
                                    <input id="password" type="password" class="form-control border-dark @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-3 col-form-label text-md-right">{{ __('Repetir senha') }}</label>

                                <div class="col">
                                    <input id="password-confirm" type="password" class="form-control border-dark" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col">
                                    <button type="submit" class="my-btn-login-one btn btn-block border-dark p-3">
                                        {{ __('REGISTRAR') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

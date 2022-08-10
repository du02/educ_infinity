@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card border-dark my-shadow">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">

                        <div class="reset-energy">
                            <p>Clique em "Restaurar" para recuperar toda a energia dos alunos.</p>
                            <a href="{{ route('reset.energy') }}"
                                class="btn my-btn-add border border-dark ml-1 font-weight-bold"
                                    id="">Restaurar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

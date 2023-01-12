@extends('layouts.app')

@section('content')
<div >
    <img class="contenedor2" src="./fotos/fondo_login.jpg" />
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('¡Ya estás logeado!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

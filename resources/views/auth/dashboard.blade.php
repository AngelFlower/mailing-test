@extends('layouts.auth')

@section('title', 'Usuario')

@section('css')

    <link rel="stylesheet" href="{{ asset('/css/dashboard.css') }}">

@endsection

@section('content')
    <div class="row h-100">
        <div class="col-lg-6 p-5 v-center">
            <div>
                <div class="card shadow" style="width: 18rem;">
                    <img src="{{ asset('svg/user.svg') }}" class="card-img-top p-5" alt="Imagen de usuario">
                    <div class="card-body">
                        <h5 class="card-title">{{ Auth::user()->name }} </h5>
                        <p class="card-text">{{ Auth::user()->email }} </p>
                        <a href="{{ route('signout') }}" class="card-link">Cerar sesión</a>
                        <a href="{{ url('/') }}" class="card-link">Ir a inicio</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 p-5 v-center">
            <div>
                <h2 class="display-1">Ya estás registrado</h2>
                <h3 class="display-5">Buena suerte!</h2>
            </div>
        </div>
    </div>

@endsection

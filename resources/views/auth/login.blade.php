@extends('layouts.auth')

@section('title', 'Inicia sesión')

@section('content')

    <div class="row h-100">
        <div class="col-lg-6 p-5 v-center">
            <img class="w-100 login-img" src="{{ asset('/svg/login.svg') }}" alt="Imagen de inicio de sesión"/>
        </div>
        <div class="col-lg-6 p-5 v-center">
            <div>
                <h1>Inicio de sesión</h1>
                <div class="form-width">
                    <form method="POST" action="{{ route('login.custom') }}">
                        @csrf
                        <div class="form-group mb-3">
                            <input type="text" placeholder="Correo electrónico" id="email" class="form-control"
                                name="email" required autofocus>
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>

                        <div class="form-group mb-3">
                            <input type="password" placeholder="Contraseña" id="password" class="form-control"
                                name="password" required>
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>

                        <div class="d-grid mx-auto mb-2">
                            <button type="submit" class="btn btn-success btn-block">Iniciar sesión</button>
                        </div>
                        <div class="d-grid mx-auto mb-2">
                            <a href="{{ url('registration') }}" class="btn btn-secondary">Quiero
                                registrarme</a>
                        </div>
                        <div class="d-grid mx-auto">
                            <a href="{{ url('/') }}" class="text-center">Volver atrás</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>


@endsection

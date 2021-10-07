@extends('layouts.app')

@section('title', 'Castrol mailing')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/home.css') }}">
@endsection

@section('content')

    <img class="w-100" src="{{ asset('/mailing/fondo-mail.png') }}" alt="">
    <div class="content">
        <img class="w-100" src="{{ asset('/mailing/header-mail1.png') }}" alt="">
        <img class="header-logos" src="{{ asset('/mailing/header-logos.png') }}" alt="">
        <div class="principal-text bold-text">
            asiste hoy 23 de septiembre - 7 pm <br>
            pordrás ganar $1,5000 en gasolina BP <br>
            y hasta una moto con <span class="green-text">garage castrol.</span>
        </div>
        <div class="info-text white-text">
            Si te registraste y no pudiste asistir al evento pasado, esta es tu <br>
            oportunidad, hoy 23 de septiembre habrá una nueva edición de <br>
            <span class="bold-text">Garage castrol</span>, te esperamos
        </div>
        <div class="w-100 center-h">
            <a href="{{ url('dashboard') }}" class="boton-ingresa">
                <img class="boton-ingresa-img" src="{{ asset('/mailing/boton-ingresa.png') }}" alt="">
            </a>
        </div>
    </div>
    <footer>
        <img class="w-100" src="{{ asset('/mailing/footer-mail1.png') }}" alt="">
    </footer>

@endsection

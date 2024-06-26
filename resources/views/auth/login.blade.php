@extends('layouts.auth')
@section('title')
    <title>Iniciar Sesión</title>
@endsection
@section('content')
    <div class="container">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="title">
                <img src="{{ asset('img/img_logo.png') }}" alt="Logo" id="user">
                <h2>INICIAR SESIÓN</h2>
            </div>
            <div class="classinput">
                <input type="email" id="email" name="email" placeholder="Email" required>
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <input type="password" id="password" name="password" placeholder="Contraseña" required>
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="cont2">
                <div>
                    <input type="checkbox" id="recuerdame" name="recuerdame">
                    <label for="recuerdame">Recuérdame</label>
                </div>
                <a href="{{ route('resetPassword') }}">Olvidé mi contraseña</a>
            </div>
            <div class="btns">
                <button type="button" class="btn_registro_i" id="btn_registro"><a href="{{route('show-register','client')}}">REGISTRARSE</a></button>
                <button type="submit" class="btn_iniciar_i">INICIAR SESIÓN</button>
            </div>
        </form>
    </div>
@endsection

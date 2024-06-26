@extends('layouts.auth')
@section('title')
    <title>Registrarse</title>
@endsection
@section('content')
    <div class="container">
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="title">
                <img src="{{asset('img/img_logo.png')}}" alt="Logo" id="user">
                <h2>CREAR CUENTA</h2>
            </div>
            <div class="classinput">
                <input type="text" id="name" name="name" placeholder="Nombre" required>
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <input type="email" id="email" name="email" placeholder="Email" required>
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <input type="password" id="password" name="password" placeholder="Contraseña" required>
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <input type="text" name="role" value="2" hidden>
            </div>
            <div class="terms">
                <input type="checkbox" id="acepto-terminos" name="acepto-terminos" required>
                <label for="acepto-terminos">Acepto los <a href="#">Términos y Condiciones</a></label>
                <p><a href="{{ route('show-register', 'organizer') }}">Crear cuenta de organizador</a></p>
            </div>
            <div class="btns">
                <button type="submit" class="btn_registro_c">REGISTRARSE</button>
                <button type="button" id="btn_iniciar_c"><a href="{{route('show-login')}}">INICIAR SESIÓN</a></button>
            </div>
        </form>
    </div>
@endsection

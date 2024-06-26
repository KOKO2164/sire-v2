@extends('layouts.app')
@section('title')
    <title>{{ $show->title }}</title>
@endsection
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/show/selector_style.css') }}">
@endsection
@section('content')
    <section class="container_principal_seat_selector">
        @include('layouts.left-container')
        <div class="container_right">
            <div class="container_tittle">
                01. USUARIO
            </div>
            <div class="container_usuario_info">
                <div class="usuario_info">
                    <div>
                        <div class="info_tittle">
                            <label>
                                INFORMACIÓN DEL USUARIO
                            </label>
                        </div>
                        <form action="{{ route('updateUser', $show) }}" method="POST" id="user-update">
                            @csrf
                            @method('PUT')
                            <div class="info_group">
                                <label>NOMBRE:</label>
                                <label class="info_user">{{ Auth::user()->name }}</label>
                            </div>
                            <div class="info_group">
                                <label>EMAIL:</label>
                                <label class="info_user">{{ Auth::user()->email }}</label>
                            </div>
                            <div class="info_group">
                                <label>TELÉFONO:</label>
                                <label class="info_user"><input type="number" name="phone" placeholder="Ingrese teléfono"></label>
                            </div>
                            <div class="info_group">
                                <label>DOCUMENTO DE IDENTIDAD:</label>
                                <label class="info_user"><input type="number" name="dni" placeholder="Ingrese DNI"></label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <button form="user-update" type="submit" class="btn_compra">COMPRAR</button>
        </div>
    </section>
@endsection

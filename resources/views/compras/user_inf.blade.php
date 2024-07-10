@extends('layouts.app')
@section('title')
    <title>{{ $show->title }}</title>
@endsection
@section('content')
    <section class="container mt-3">
        <div class="row">
            <div class="col-6">
                @include('layouts.left-container')
            </div>
            <div class="col-6">
                <div class="row">
                    <div class="col-12">
                        <div class="card mb-3">
                            <div class="card-body text-center">
                                01. USUARIO
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h5>Información del Usuario</h5>
                                </div>
                                @if (Auth::user())
                                    <form action="{{ route('updateUser', ['slug' => $show->slug]) }}" method="POST"
                                        id="user-update">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="card-text">
                                                    <label class="form-label" for="name">Nombre:</label>
                                                    <input type="text" name="name" id="name"
                                                        class="form-control mb-1" value="{{ Auth::user()->name }}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="card-text">
                                                    <label class="form-label" for="email">Correo:</label>
                                                    <input type="email" name="email" id="email"
                                                        class="form-control mb-1" value="{{ Auth::user()->email }}"
                                                        readonly>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="card-text">
                                                    <label class="form-label" for="phone">Teléfono:</label>
                                                    <input type="number" name="phone" id="phone"
                                                        class="form-control mb-1" value="{{ Auth::user()->phone }}">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="card-text">
                                                    <label class="form-label" for="dni">Documento de identidad:</label>
                                                    <input type="number" name="dni" id="dni"
                                                        class="form-control mb-1" value="{{ Auth::user()->dni }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-outline-success mt-3">COMPRAR</button>
                                        </div>
                                    </form>
                                @else
                                    <div class="alert alert-danger" role="alert">
                                        Debes iniciar sesión para continuar con la compra.
                                    </div>
                                    <div class="text-center">
                                        <a href="{{ route('show-login') }}" class="btn btn-outline-primary mt-3">Iniciar
                                            Sesión</a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

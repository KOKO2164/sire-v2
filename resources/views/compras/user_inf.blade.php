@extends('layouts.app')
@section('title')
    <title>{{ $show->title }}</title>
@endsection
@section('content')
    <br>
    <section class="container">
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
                                <div class="card-title">
                                    <h5>Información del Usuario</h5>
                                </div>
                                <form action="{{ route('updateUser', ['slug' => $show->slug]) }}" method="POST" id="user-update">
                                    @csrf
                                    @method('PUT')
                                    <div class="card-text">
                                        <label class="form-label" for="name">Nombre:</label>
                                        <input type="text" name="name" id="name" class="form-control w-50 mb-1" value="{{ Auth::user()->name }}" readonly>
                                    </div>
                                    <div class="card-text">
                                        <label class="form-label" for="email">Correo:</label>
                                        <input type="email" name="email" id="email" class="form-control w-50 mb-1" value="{{ Auth::user()->email }}" readonly>
                                    </div>
                                    <div class="card-text">
                                        <label class="form-label" for="phone">Teléfono:</label>
                                        <input type="number" name="phone" id="phone" class="form-control w-50 mb1" value="{{ Auth::user()->phone }}">
                                    </div>
                                    <div class="card-text">
                                        <label class="form-label" for="dni">Documento de identidad:</label>
                                        <input type="number" name="dni" id="dni" class="form-control w-50" value="{{ Auth::user()->dni }}">
                                    </div>
                                    <button type="submit" class="btn btn-outline-success">COMPRAR</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

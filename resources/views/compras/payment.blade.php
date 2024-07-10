@extends('layouts.app')
@section('title')
    <title>{{ $show->title }}</title>
@endsection
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/payment/selector_style.css') }}">
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
                                04. MÉTODO DE PAGO
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h5>Completa información de pago</h5>
                                </div>
                                @if (Auth::user())
                                    <form action="{{ route('paypal', ['slug' => $show->slug]) }}" method="POST"
                                        id="cant-seat-area">
                                        @csrf
                                        <input type="hidden" name="reservations" value="{{ $reservationJson }}">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="price">Monto a pagar:</label>
                                                <input type="text" name="total" id="price"
                                                    class="form-control" readonly value="{{ $price * $cantidad }}">
                                            </div>
                                            <div class="text-center">
                                                <a href="{{ url()->previous() }}"
                                                    class="btn btn-outline-secondary">VOLVER</a>
                                                <button form="cant-seat-area" type="submit"
                                                    class="btn btn-success">PAGAR</button>
                                            </div>
                                        </div>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

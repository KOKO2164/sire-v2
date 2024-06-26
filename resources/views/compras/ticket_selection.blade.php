@extends('layouts.app')
@section('title')
    <title>{{ $show->title }}</title>
@endsection
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/ticket_selection/selector_style.css') }}">
@endsection
@section('content')
    <section class="container_principal_seat_selector">
        @include('layouts.left-container')
        <div class="container_right">
            <div class="container_tittle">
                02. ENTRADAS
            </div>
            <div class="container_entrada_compra">
                <div class="tipo_boletos">
                    <div class="tittle_boletos">
                        <label>BOLETOS</label>
                    </div>
                    <div class="row">
                        <div class="butaca">
                            <img src="{{ asset('img/shows/butaca_teatro.jpg') }}" alt="butaca_teatro">
                        </div>
                        <div class="butaca_info">
                            <form action="{{ route('seatSelection', $show) }}" method="POST" id="cant-seat-area">
                                @csrf
                                @foreach ($show->seatAreaPrices as $index => $seatAreaPrice)
                                    <div class="precio_butaca">
                                        <div class="precio_detalle1">
                                            <h2>{{ $seatAreaPrice->seatArea->name }}</h2>
                                            <h5>valor: S/{{ formateadorMoneda($seatAreaPrice->price) }}</h5>
                                        </div>
                                        <div class="precio_detalle2">
                                            <div class="compra_combobox">
                                                <input type="number" name="tickets[{{ $index }}]">
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btns_entrada_boletos">
                <a href="{{ url()->previous() }}" class="btn_boletos1">VOLVER</a>
                <button form="cant-seat-area" type="submit" class="btn_boletos2">CONTINUAR</button>
            </div>
        </div>
    </section>
@endsection

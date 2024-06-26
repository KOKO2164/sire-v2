@extends('layouts.app')
@section('title')
    <title>{{ $show->title }}</title>
@endsection
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/payment/selector_style.css') }}">
@endsection
@section('content')
    <section class="container_principal_seat_selector">
        @include('layouts.left-container')
        <div class="container_right">
            <div class="container_tittle">
                04. METODO DE PAGO
            </div>
            <div class="container_metodo_pago">
                <div>
                    <div class="tittle_metodo_pago">
                        <label>COMPLETA INFORMACIÓN DE PAGO</label>
                    </div>
                </div>
                <div class="space_pay">
                    <div class="red_important">
                        <label class="mxy"><strong>IMPORTANTE: </strong>Verificar que su tarjeta esté habilitada para realizar compras online</label>
                    </div>
                    <div class="campos_pay">
                        <div class="nro_tarjeta">
                            <label class="mxy">N° TARJETA</label>
                            <input type="text" class="input_pay" placeholder="">
                        </div>
                        <div class="tit_tarjeta">
                            <label class="mxy">TITULAR DE LA TARJETA</label>
                            <input type="text" class="input_pay" pattern="[0-9]{13,19}" maxlength="19" placeholder="">
                        </div>
                        <div class="fecha_exp">
                            <label class="mxy">FECHA DE EXPIRACIÓN</label>
                            <input type="date" class="input_pay1" placeholder="">
                        </div>
                        <div class="cvc">
                            <label class="mxy">CVC</label>
                            <input type="text" class="input_pay" placeholder="">
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
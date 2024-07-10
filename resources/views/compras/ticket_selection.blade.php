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
                                02. ENTRADAS
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h5>Selecciona tus entradas</h5>
                                </div>
                                @if (Auth::user())
                                    <form action="{{ route('seatSelection', ['slug' => $show->slug]) }}" method="POST"
                                        id="cant-seat-area">
                                        @csrf
                                        @foreach ($show->seatAreaPrices as $index => $seatAreaPrice)
                                            <div class="bg-light my-3">
                                                <div class="row">
                                                    <div class="col-lg-9 col-md-8">
                                                        <h6>{{ $seatAreaPrice->seatArea->name }}</h6>
                                                        <strong>S/{{ number_format($seatAreaPrice->price, 2) }}</strong>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 d-flex justify-content-end">
                                                        <input type="number" name="tickets[{{ $index }}]"
                                                            class="form-control float-right">
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        <div class="text-center">
                                            <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">VOLVER</a>
                                            <button form="cant-seat-area" type="submit" class="btn btn-success">CONTINUAR</button>
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

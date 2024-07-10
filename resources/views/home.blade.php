@extends('layouts.app')
@section('title')
    <title>Sistema de Reserva de Tickets - Siret</title>
@endsection
@section('content')
    <br>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/shows/carousel/c1.png') }}" class="d-block w-100" alt="" />
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/shows/carousel/c2.png') }}" class="d-block w-100" alt="" />
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/shows/carousel/c3.png') }}" class="d-block w-100" alt="" />
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row row-cols-lg-4 row-cols-md-2 g-4">
            @foreach ($shows as $show)
                <div class="col">
                    <div class="card">
                        <img src="{{ $show->image->path }}" class="card-img-top" alt="Cita a Ciegas" style="height: 11rem">
                        <div class="card-body">
                            <h5 class="card_title">{{ $show->title }}</h5>
                            <p class="card_text">
                                <i class="fa-solid fa-calendar"></i>
                                {{ \Jenssegers\Date\Date::parse($show->start_date)->format('l j \de F - ') . \Carbon\Carbon::parse($show->start_time)->format('h:i a') }}
                            </p>
                            <p class="card-text"><small class="text-body-secondary">Desde</small> S/
                                {{ $show->seatAreaPrices->min('price') }}</p>
                            <a href="{{ route('show', $show->slug) }}" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cardImages = document.querySelectorAll('.card-img-top');
            cardImages.forEach((cardImage) => {
                cardImage.style.cursor = 'pointer';

                cardImage.addEventListener('click', () => {
                    window.location.href = cardImage.parentElement.querySelector('a').href;
                });
            });
        });
    </script>
@endsection

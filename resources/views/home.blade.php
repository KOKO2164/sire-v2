@extends('layouts.app')
@section('title')
    <title>Sistema de Reserva de Tickets - Siret</title>
@endsection
@section('content')
    <div class="dashboard">
        <section class="carrusel">
            <div class="slides">
                <div class="slide slide-1">
                    <img src="{{ asset('img/home/carousel/c1.png') }}" alt="" />
                </div>
                <div class="slide slide-2">
                    <img src="{{ asset('img/home/carousel/c2.png') }}" alt="" />
                </div>
                <div class="slide slide-3">
                    <img src="{{ asset('img/home/carousel/c3.png') }}" alt="" />
                </div>
            </div>
        </section>
        <section class="cards-section">
            <div class="cards">
                @foreach ($shows as $show)
                    <article class="card">
                        <div class="card_preview">
                            <img src="{{ $show->image->path }}" alt="Cita a Ciegas">
                        </div>
                        <div class="card_content">
                            <h3 class="card_title">
                                <strong>{{ $show->title }}</strong>
                            </h3>
                            <div class="card_address">
                                <i class="fa-solid fa-calendar"></i>{{\Carbon\Carbon::parse($show->start_date)->format('l d M. - ') . \Carbon\Carbon::parse($show->start_time)->format('h:i a')}}
                            </div>
                            <div class="card_bottom">
                                <div class="card_properties">
                                    <small>Desde</small>
                                    <b>S/</b>
                                    <b>{{ $show->seatAreaPrices->min('price') }}</b>
                                </div>
                                <div>
                                    <button class="card_btn" type="submit">
                                        Comprar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach
                {{-- <article class="card">
                    <div class="card_preview">
                        <img src="{{ asset('img/home/08QBHq98HtHWY5j.jpg') }}" alt="Vista Paradiso">
                    </div>
                    <div class="card_content">
                        <h3 class="card_title">
                            <strong>Juegas? El otro soy yo</strong>
                        </h3>
                        <div class="card_address">
                            <i class="fa-solid fa-calendar"></i>martes 18 jun. - 7:00 pm
                        </div>
                        <div class="card_bottom">
                            <div class="card_properties">
                                <small>Desde</small>
                                <b>S/</b>
                                <b>45.00</b>
                            </div>
                            <div>
                                <button class="card_btn" type="submit">
                                    Comprar
                                </button>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <div class="card_preview">
                        <img src="{{ asset('img/home/8PpKllB9FqZ4SYJ.jpg') }}" alt="Skyline Oasis">
                    </div>
                    <div class="card_content">
                        <h3 class="card_title">
                            <strong>¡A ver, un aplauso !</strong>
                        </h3>
                        <div class="card_address">
                            <i class="fa-solid fa-calendar"></i>martes 18 jun. - 7:00 pm
                        </div>
                        <div class="card_bottom">
                            <div class="card_properties">
                                <small>Desde</small>
                                <b>S/</b>
                                <b>30.00</b>
                            </div>
                            <div>
                                <button class="card_btn" type="submit">
                                    Comprar
                                </button>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <div class="card_preview">
                        <img src="{{ asset('img/home/act65f379dd96472.jpg') }}" alt="Lakeview Elegance preview">
                    </div>
                    <div class="card_content">
                        <h3 class="card_title">
                            <strong>Peces Raros</strong>
                        </h3>
                        <div class="card_address">
                            <i class="fa-solid fa-calendar"></i>martes 18 jun. - 7:00 pm
                        </div>
                        <div class="card_bottom">
                            <div class="card_properties">
                                <small>Desde</small>
                                <b>S/</b>
                                <b>150.00</b>
                            </div>
                            <div>
                                <button class="card_btn" type="submit">
                                    Comprar
                                </button>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <div class="card_preview">
                        <img src="{{ asset('img/home/act660ae21ec5238.jpg') }}" alt="Vista Paradiso">
                    </div>
                    <div class="card_content">
                        <h3 class="card_title">
                            <strong>Lima Tattoo Convention</strong>
                        </h3>
                        <div class="card_address">
                            <i class="fa-solid fa-calendar"></i>martes 18 jun. - 7:00 pm
                        </div>
                        <div class="card_bottom">
                            <div class="card_properties">
                                <small>Desde</small>
                                <b>S/</b>
                                <b>40.00</b>
                            </div>
                            <div>
                                <button class="card_btn" type="submit">
                                    Comprar
                                </button>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <div class="card_preview">
                        <img src="{{ asset('img/home/act6618a679e3854.jpg') }}" alt="Skyline Oasis">
                    </div>
                    <div class="card_content">
                        <h3 class="card_title">
                            <strong>Gran Circo de China</strong>
                        </h3>
                        <div class="card_address">
                            <i class="fa-solid fa-calendar"></i>martes 18 jun. - 7:00 pm
                        </div>
                        <div class="card_bottom">
                            <div class="card_properties">
                                <small>Desde</small>
                                <b>S/</b>
                                <b>120.00</b>
                            </div>
                            <div>
                                <button class="card_btn" type="submit">
                                    Comprar
                                </button>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <div class="card_preview">
                        <img src="{{ asset('img/home/act66156e0f51905.jpg') }}" alt="Vista Paradiso">
                    </div>
                    <div class="card_content">
                        <h3 class="card_title">
                            <strong>Cita a Ciegas</strong>
                        </h3>
                        <div class="card_address">
                            <i class="fa-solid fa-calendar"></i>martes 18 jun. - 7:00 pm
                        </div>
                        <div class="card_bottom">
                            <div class="card_properties">
                                <small>Desde</small>
                                <b>S/</b>
                                <b>35.00</b>
                            </div>
                            <div>
                                <button class="card_btn" type="submit">
                                    Comprar
                                </button>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <div class="card_preview">
                        <img src="{{ asset('img/home/act66171d6808a5e.jpg') }}" alt="Skyline Oasis">
                    </div>
                    <div class="card_content">
                        <h3 class="card_title">
                            <strong>La Otra Habitación</strong>
                        </h3>
                        <div class="card_address">
                            <i class="fa-solid fa-calendar"></i>martes 18 jun. - 7:00 pm
                        </div>
                        <div class="card_bottom">
                            <div class="card_properties">
                                <small>Desde</small>
                                <b>S/</b>
                                <b>25.00</b>
                            </div>
                            <div>
                                <button class="card_btn" type="submit">
                                    Comprar
                                </button>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <div class="card_preview">
                        <img src="{{ asset('img/home/act6639ba89a7028.jpg') }}" alt="Vista Paradiso">
                    </div>
                    <div class="card_content">
                        <h3 class="card_title">
                            <strong>Gorila Amarillo</strong>
                        </h3>
                        <div class="card_address">
                            <i class="fa-solid fa-calendar"></i>martes 18 jun. - 7:00 pm
                        </div>
                        <div class="card_bottom">
                            <div class="card_properties">
                                <small>Desde</small>
                                <b>S/</b>
                                <b>30.00</b>
                            </div>
                            <div>
                                <button class="card_btn" type="submit">
                                    Comprar
                                </button>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <div class="card_preview">
                        <img src="{{ asset('img/home/act662a7a7431a62.jpg') }}" alt="Skyline Oasis">
                    </div>
                    <div class="card_content">
                        <h3 class="card_title">
                            <strong>Antes de esto, temblaba</strong>
                        </h3>
                        <div class="card_address">
                            <i class="fa-solid fa-calendar"></i>martes 18 jun. - 7:00 pm
                        </div>
                        <div class="card_bottom">
                            <div class="card_properties">
                                <small>Desde</small>
                                <b>S/</b>
                                <b>40.00</b>
                            </div>
                            <div>
                                <button class="card_btn" type="submit">
                                    Comprar
                                </button>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <div class="card_preview">
                        <img src="{{ asset('img/home/act66284f7a68737.jpg') }}" alt="Vista Paradiso">
                    </div>
                    <div class="card_content">
                        <h3 class="card_title">
                            <strong>Carlos Sadness - Lima Mágica</strong>
                        </h3>
                        <div class="card_address">
                            <i class="fa-solid fa-calendar"></i>martes 18 jun. - 7:00 pm
                        </div>
                        <div class="card_bottom">
                            <div class="card_properties">
                                <small>Desde</small>
                                <b>S/</b>
                                <b>100.00</b>
                            </div>
                            <div>
                                <button class="card_btn" type="submit">
                                    Comprar
                                </button>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <div class="card_preview">
                        <img src="{{ asset('img/home/act661e973239df6.jpg') }}" alt="Skyline Oasis">
                    </div>
                    <div class="card_content">
                        <h3 class="card_title">
                            <strong>Lima Limeña</strong>
                        </h3>
                        <div class="card_address">
                            <i class="fa-solid fa-calendar"></i>martes 18 jun. - 7:00 pm
                        </div>
                        <div class="card_bottom">
                            <div class="card_properties">
                                <small>Desde</small>
                                <b>S/</b>
                                <b>25.00</b>
                            </div>
                            <div>
                                <button class="card_btn" type="submit">
                                    Comprar
                                </button>
                            </div>
                        </div>
                    </div>
                </article> --}}
            </div>
        </section>
    </div>
@endsection

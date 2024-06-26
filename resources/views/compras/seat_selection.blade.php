@extends('layouts.app')
@section('title')
    <title>{{ $show->title }}</title>
@endsection
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/ticket_selection/selector_style.css') }}">
@endsection
@section('content')
    <section class="container_principal_seat_selector">
        <div class="container_left">
            <div class="container_reserva">
                <strong>FUNCIÓN</strong>
                <div class="img_funcion">
                    <img src="{{ asset($show->image->path) }}">
                </div>
                <div class="container_info_funcion">
                    <div class="tittle_funcion">
                        <strong>{{ $show->title }}</strong>
                    </div>
                    <div class="seat_count">
                        <b>Asiento(s):</b>
                        <input type="text" name="seatNumber" id="seatNumber">
                    </div>
                    <button class="primary" type="submit">
                        Reservar
                    </button>
                </div>
            </div>
        </div>
        <div class="container_right">
            <div class="container_tittle">
                03. ASIENTOS
            </div>
            <div class="container_selector">
                <div class="escenario">
                    <div class="border_escenario1">
                        <div class="border_escenario2">
                            Escenario
                        </div>
                    </div>
                </div>
                <div class="container_chair_span">
                    <div class="contairner_chair">
                        <div class="chair">
                            @php
                                $cont = 1;
                            @endphp
                            @for ($j = 1; $j <= 9; $j++)
                                <div class="row">
                                    @for ($i = 1; $i <= 12; $i++)
                                        @if ($cont <= 9)
                                            <li class="seat">00{{ $cont }}</li>
                                        @elseif ($cont <= 99)
                                            <li class="seat">0{{ $cont }}</li>
                                        @else
                                            <li class="seat">{{ $cont }}</li>
                                        @endif
                                        @php
                                            $cont++;
                                        @endphp
                                    @endfor
                                </div>
                            @endfor
                        </div>
                    </div>
                    <div class="alfabe">
                        <span class="margin_span">A</span>
                        <span class="margin_span">B</span>
                        <span class="margin_span">C</span>
                        <span class="margin_span">D</span>
                        <span class="margin_span">E</span>
                        <span class="margin_span">F</span>
                        <span class="margin_span">G</span>
                        <span class="margin_span">H</span>
                        <span class="margin_span">I</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        const seats = document.querySelectorAll('.seat');
        seats.forEach(seat => {
            seat.addEventListener('click', () => {
                seat.classList.toggle('selected');
                seatSelected(seat);
            });
        });
        
        function seatSelected(seat) {
            $.ajax({
                url: '{{ route('seatSelection', $show) }}',
                type: 'POST',
                data: {
                    seats: seat.textContent
                },
                success: function(response) {
                    console.log(response);
                }
            });
        }
    </script>
@endsection
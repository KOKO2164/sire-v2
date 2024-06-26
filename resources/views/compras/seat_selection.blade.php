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
                    <form action="{{ route('pagar', $show) }}" method="POST">
                        @csrf
                        <div class="seat_count">
                            <b>Asiento(s):</b>
                            <input type="text" name="seatNumber" id="seatNumber">
                        </div>
                        <button class="primary" type="submit">
                            Reservar
                        </button>
                    </form>
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
                                $rows = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I'];
                            @endphp
                            @for ($j = 0; $j < 9; $j++)
                                <div class="row">
                                    @for ($i = 1; $i <= 12; $i++)
                                        @if ($cont <= 9)
                                            <li class="seat" data-row="{{ $rows[$j] }}">00{{ $cont }}</li>
                                        @elseif ($cont <= 99)
                                            <li class="seat" data-row="{{ $rows[$j] }}">0{{ $cont }}</li>
                                        @else
                                            <li class="seat" data-row="{{ $rows[$j] }}">{{ $cont }}</li>
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
                        @foreach ($rows as $row)
                            <span class="margin_span{{ $loop->index }}">{{ $row }}</span>
                        @endforeach
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
            const row = seat.getAttribute('data-row');
            const seatInfo = `${row}${seat.innerText}`;
            if (seatNumber.value.length === 0) {
                seatNumber.value += seatInfo;
            } else {
                seatNumber.value += seatNumber.value.includes(seatInfo) ? '' : `,${seatInfo}`;
            }
        }
    </script>
@endsection
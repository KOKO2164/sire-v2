@extends('layouts.app')
@section('title')
    <title>{{ $show->title }}</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/ticket_selection/selector_style.css') }}">
@endsection
@section('content')
    <section class="container mt-3">
        <div class="row">
            <div class="col-6">
                @include('layouts.left-container-seat')
            </div>
            <div class="col-6">
                <div class="row">
                    <div class="col-12">
                        <div class="card mb-3">
                            <div class="card-body text-center">
                                03. ASIENTOS
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h5>Selecciona tus asientos</h5>
                                </div>
                                @if (Auth::user())
                                    <div class="escenario">
                                        <div class="border_escenario1">
                                            <div class="border_escenario2">
                                                Escenario
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container_chair_span mb-3">
                                        <div class="contairner_chair">
                                            <div class="chair">
                                                @php
                                                    $cont = 1;
                                                    $rows = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I'];
                                                @endphp
                                                @for ($j = 0; $j < 9; $j++)
                                                    <div class="row">
                                                        @for ($i = 1; $i <= 9; $i++)
                                                            @if ($cont <= 9)
                                                                <li class="seat" data-row="{{ $rows[$j] }}">
                                                                    0{{ $cont }}</li>
                                                            @elseif ($cont <= 99)
                                                                <li class="seat" data-row="{{ $rows[$j] }}">
                                                                    0{{ $cont }}</li>
                                                            @else
                                                                <li class="seat" data-row="{{ $rows[$j] }}">
                                                                    {{ $cont }}</li>
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
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            const totalTickets = $('#tickets').val();
            const seats = document.querySelectorAll('.seat');
            let count = 0;
            seats.forEach(seat => {
                seat.addEventListener('click', () => {
                    if (count < totalTickets) {
                        seat.classList.toggle('selected');
                        seatSelected(seat);
                        count = document.querySelectorAll('.selected').length;
                    } else {
                        alert('Solo puedes seleccionar ' + totalTickets + ' asientos');
                    }
                });
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

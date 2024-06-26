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
            <div class="horario_funcion">
                <p>Dia: {{ \Carbon\Carbon::parse($show->start_date)->format('l d M.') }}</p>
                <p>Hora: {{ \Carbon\Carbon::parse($show->start_time)->format('h:i a') }}</p>
            </div>
        </div>
    </div>
</div>
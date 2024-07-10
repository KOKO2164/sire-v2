<div class="card">
    <img src="{{ asset($show->image->path) }}" class="card-img-top" alt="{{ $show->slug }}">
    <div class="card-body">
        <h5 class="card-title">{{ $show->title }}</h5>
        <p class="card-text">
            <i class="fa-solid fa-calendar"></i>
            Día: {{ \Jenssegers\Date\Date::parse($show->start_date)->format('l j \de F') }}
        </p>
        <p class="card-text">
            <i class="fa-solid fa-clock"></i>
            Hora: {{ \Carbon\Carbon::parse($show->start_time)->format('h:i a') }}
        </p>
    </div>
</div>

<div class="card">
    <img src="{{ asset($show->image->path) }}" class="card-img-top" alt="{{ $show->slug }}">
    <div class="card-body">
        <h5 class="card-title">{{ $show->title }}</h5>
        <form action="{{ route('pagar', ['slug' => $show->slug]) }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-3 mt-2">
                    <input type="number" name="ticket0" value="{{ $tickets[0] ?? 0}}" hidden>
                    <input type="number" name="ticket1" value="{{ $tickets[1] ?? 0}}" hidden>
                    <input type="number" name="ticket2" value="{{ $tickets[2] ?? 0}}" hidden>
                    <input type="number" name="tickets" id="tickets" value="{{ $tickets[0] ?? 0 + $tickets[1] ?? 0 + $tickets[2] ?? 0 }}" hidden>
                    <label>Asiento(s):</label>
                </div>
                <div class="col-4">
                    <input type="text" name="seatNumber" id="seatNumber" class="form-control">
                </div>
                <div class="col-5">
                    <button class="btn btn-success" type="submit">
                        Reservar
                    </button>
                    <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">VOLVER</a>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="card">
    <img src="{{ asset($show->image->path) }}" class="card-img-top" alt="{{ $show->slug }}">
    <div class="card-body">
        <h5 class="card-title">{{ $show->title }}</h5>
        <form action="{{ route('pagar', $show) }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-3 mt-2">
                    <label>Asiento(s):</label>
                </div>
                <div class="col-4">
                    <input type="text" name="seatNumber" id="seatNumber" class="form-control">
                </div>
                <div class="col-3">
                    <button class="primary" type="submit">
                        Reservar
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

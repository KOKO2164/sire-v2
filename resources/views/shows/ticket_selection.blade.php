
<div class="container_right">
    <div class="container_tittle">
        02. ENTRADAS
    </div>
    <div class="container_entrada_compra">
        <div class="tipo_boletos">
            <div>
                <div class="tittle_boletos">
                    <label>BOLETOS</label>
                </div>
            </div>
            <div class="row">
                <div class="butaca">
                    <img src="{{ asset('img/shows/butaca_teatro.jpg') }}" alt="butaca_teatro">
                </div>
                <div class="butaca_info">
                    @foreach ($show->seatAreaPrices as $seatAreaPrice)
                        <div class="precio_butaca">
                            <div class="precio_detalle1">
                                <h2>{{ $seatAreaPrice->seatArea->name }}</h2>
                                <h5>valor: S/{{ $seatAreaPrice->price }}.00</h5>
                            </div>
                            <div class="precio_detalle2">
                                <div class="compra_combobox">
                                    <select>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">10</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="btns_entrada_boletos">
        <a href="{{ url()->previous() }}" class="btn_boletos1">VOLVER</a>
        <a href="" class="btn_boletos2">CONTINUAR</a>
    </div>
</div>
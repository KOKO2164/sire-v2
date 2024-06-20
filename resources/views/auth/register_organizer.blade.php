<body>
    <div class="container">
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="title">
                <img src="{{ asset('img/img_logo2.png') }}" alt="Logo">
                <h2>CREAR CUENTA</h2>
            </div>
            <div class="classinput">
                <input type="text" id="name" name="name" placeholder="Nombre" required>
                <input type="email" id="email" name="email" placeholder="Email" required>
                <input type="password" id="password" name="password" placeholder="Contraseña" required>
            </div>
            <div class="terms">
                <input type="checkbox" id="acepto-terminos" name="acepto-terminos" required>
                <label for="acepto-terminos">Acepto los <a href="#">Términos y Condiciones</a></label>
            </div>
            <div class="btns">
                <button type="submit"class="btn_registro_c">REGISTRARSE</button>
                <button type="button" class="btn_iniciar_c" id="btn_iniciar">INICIAR SESIÓN</button>
            </div>
        </form>
    </div>
</body>
</html>

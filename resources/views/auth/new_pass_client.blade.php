<body>
    <div class="container_center2">
        <form action="{{ route('updatePassword') }}" method="POST">
            @csrf
            @method('PUT')
            <div class="title">
                <h2>NUEVA CONTRASEÑA</h2>    
            </div>
            <div class="classinput">
                <input type="password" id="nueva_contrasena" name="nueva_contrasena" placeholder="Nueva contraseña" required>
                <input type="password" id="confirmar_contrasena" name="confirmar_contrasena" placeholder="Confirmar contraseña" required>
            </div>
            <div class="btns">
                <button type="submit" class="btn_iniciar_c">RESTABLECER CONTRASEÑA</button>
            </div>
        </form>
    </div>
</body>
</html>
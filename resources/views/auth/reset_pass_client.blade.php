<body>
    <div class="container_center">
        <form id="reset_pass_form" action="{{ route('changePassword') }}" method="POST">
            @csrf
            <div class="title">
                <h2>¿HAS OLVIDADO TU CONTRASEÑA?</h2>
            </div>
            <div class="classinput">
                <input type="email" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="btns">
                <button type="submit" class="btn_iniciar_c">RESTABLECER CONTRASEÑA</button>
            </div>
        </form>
    </div>
</body>
</html>

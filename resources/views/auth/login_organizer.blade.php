<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Sesion</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/auth/style_org.css') }}">
</head>
<body>
    <div class="container">
        <form action="{{ route('enterOrganizer') }}" method="POST">
            @csrf
            <div class="title">
                <img src="{{ asset('img/img_logo2.png') }}" alt="Logo">
                <h2>INICIAR SESIÓN</h2>
            </div>
            <div class="classinput">
                <input type="email" id="email" name="email" placeholder="Email" required>
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <input type="password" id="password" name="password" placeholder="Contraseña" required>
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="cont2">
                <div>
                    <input type="checkbox" id="remember_me" name="remember_me">
                    <label for="remember_me">Recuérdame</label>
                </div>
                <a href="reset_pass_org.html">Olvidé mi contraseña</a>
            </div>
            <div class="btns">
                <button type="button" class="btn_registro_i" id="btn_registro">REGISTRARSE</button>
                <button type="submit" class="btn_iniciar_i">INICIAR SESIÓN</button>
            </div>
        </form>
    </div>
</body>
</html>

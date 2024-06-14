<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Sesion</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/css_log_org/style_org.css')}}">
</head>
<body>
    <div class="container">
        <form>
            <div class="title">
                <img src="{{asset('img/img_logo2.png')}}" alt="Logo">
                <h2>INICIAR SESIÓN</h2>
            </div>
            <div class="classinput">
                <input type="email" id="email" name="email"  autocomplete="off" placeholder="Email" required>
                <input type="password" id="contrasena" name="contrasena" placeholder="Contraseña" required>
            </div>
            <div class="cont2">
                <div>
                    <input type="checkbox" id="recuerdame" name="recuerdame" required>
                    <label for="recuerdame">Recuérdame</label>
                </div>
                <a href="reset_pass_org.html">Olvidé mi contraseña</a>
            </div>
            <div class="btns">
                <button type="submit" class="btn_registro_i" id="btn_registro">REGISTRARSE</button>
                <button type="submit" class="btn_iniciar_i">INICIAR SESIÓN</button>
            </div>
        </form>
    </div>
</body>
</html>

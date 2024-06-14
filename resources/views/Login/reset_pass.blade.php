<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/css_log/style_reset.css')}}">
</head>
<body>
    <div class="container_center">
        <form id="reset_pass_form">
            <div class="title">
                <h2>¿HAS OLVIDADO TU CONTRASEÑA?</h2>
            </div>
            <div class="classinput">
                <input type="email" id="email" name="email"  autocomplete="off" placeholder="Email" required>
            </div>
            <div class="btns">
                <button type="submit" class="btn_iniciar_c">RESTABLECER CONTRASEÑA</button>
            </div>
        </form>
    </div>
</body>
</html>

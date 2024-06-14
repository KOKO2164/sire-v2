    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cuenta</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/auth/style.css')}}">
</head>
<body>
    <div class="container">
        <form action="{{ route('storeClient') }}" method="POST">
            @csrf
            <div class="title">
                <img src="{{asset('img/img_logo.png')}}" alt="Logo">
                <h2>CREAR CUENTA</h2>
            </div>
            <div class="classinput">
                <input type="text" id="name" name="name" placeholder="Nombre" required>
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <input type="email" id="email" name="email" placeholder="Email" required>
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <input type="password" id="password" name="password" placeholder="Contraseña" required>
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="terms">
                <input type="checkbox" id="acepto-terminos" name="acepto-terminos" required>
                <label for="acepto-terminos">Acepto los <a href="#">Términos y Condiciones</a></label>
            </div>
            <div class="btns">
                <button type="submit" class="btn_registro_c">REGISTRARSE</button>
                <button type="button" class="btn_iniciar_c" id="btn_iniciar">INICIAR SESIÓN</button>
            </div>
        </form>
    </div>
</body>
</html>

@extends('layouts.app')
@section('title')
    <title>Iniciar Sesión</title>
@endsection
@section('content')
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">
                        <div class="mb-md-3 mt-md-4 pb-5">
                            <img src="{{ asset('img/img_logo.png') }}" alt="Logo" id="user" width="150"
                                height="140">
                            <h2 class="fw-bold mb-2 text-uppercase">INICIAR SESIÓN</h2>
                            <form action="{{ route('login') }}" method="POST" id="form-login" class="needs-validation"
                                novalidate>
                                @csrf
                                <div class="form-floating mb-3">
                                    <input type="email" name="email" class="form-control" id="floatingInput" required>
                                    <label for="floatingInput">Correo</label>
                                    <div class="invalid-feedback">Por favor ingrese su correo electrónico.</div>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" name="password" class="form-control" id="floatingPassword"
                                        required>
                                    <label for="floatingPassword">Contraseña</label>
                                    <div class="invalid-feedback">Por favor ingrese su contraseña.</div>
                                </div>
                            </form>
                            <p class="small mb-5 pb-lg-2"><a class="text-black-50"
                                    href="{{ route('resetPassword') }}">Olvidé mi contraseña</a></p>
                            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-danger btn-lg px-5"
                                type="submit" form="form-login">Iniciar Sesión</button>
                        </div>
                        <div>
                            <p class="mb-0">¿No estás registrado? <a href="{{ route('show-register', 'client') }}"
                                    class="text-black-50 fw-bold">Registrarse</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script type="module">
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
@endsection

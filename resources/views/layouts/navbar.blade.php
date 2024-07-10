<nav class="navbar navbar-expand-lg" style="background: white !important">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('img/siret_home.png') }}" alt="siret_home" width="50" height="40">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
            </ul>
            <div class="d-flex">
                @if (Auth::check())
                    <p class="nav-link me-3 mt-2">{{ Auth::user()->name }} </p>
                    <a href="{{ route('logout') }}" title="" class="nav-link mt-2">
                        Cerrar Sesión
                    </a>
                @else
                    <a href="{{ route('show-login') }}" title="" class="nav-link me-3 mt-2">
                        Iniciar Sesión
                    </a>
                    <a href="{{ route('show-register', 'client') }}" title="" class="nav-link mt-2">
                        Registrarse
                    </a>
                @endif
            </div>
        </div>
    </div>
</nav>

<header class="header">
    <div class="menu_wrapper">
        <div class="menu_bar">
            <a href="{{ route('home') }}" title="Home" aria-label="home" class="logo">
                <img src="{{ asset('img/siret_home.png') }}" alt="siret_home">
            </a>
            <nav>
                <ul class="nav hide">
                    <li>
                        <a href="{{ route('home') }}" title="Inicio">
                            Inicio
                        </a>
                    </li>
                    {{-- <li>
                        <a href="#nosotros" title="Nosotros">
                            Nosotros
                        </a>
                    </li>
                    <li>
                        <a href="#eventos" title="Eventos">
                            Eventos
                        </a>
                    </li>
                    <li>
                        <a href="#contacto" title="Contacto">
                            Contacto
                        </a>
                    </li> --}}
                </ul>
            </nav>
        </div>
        @if (Auth::check())
            <p>{{ Auth::user()->name }}</p>
            <div class="action-buttons">
                <a href="{{ route('logout') }}" title="" class="primary">
                    Cerrar Sesión
                </a>
            </div>
        @else
            <div class="action-buttons hide">
                <a href="{{ route('show-login') }}" title="" class="primary">
                    Iniciar Sesión
                </a>
                <a href="{{ route('show-register', 'client') }}" title="" class="secondary">
                    Registrarse
                </a>
            </div>
        @endif
    </div>
</header>

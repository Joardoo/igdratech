@php
    // Enlaces del menú: nombre de la ruta => texto que se muestra
    $links = [
        'home' => 'Inicio',
        'products' => 'Productos',
        'about' => 'Sobre nosotros',
    ];
@endphp

<header class="site-header">
    <nav class="navbar navbar-expand-lg py-3" aria-label="Menú principal">
        <div class="container">
            <x-site.logo class="navbar-brand" />

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav"
                    aria-controls="main-nav" aria-expanded="false" aria-label="Abrir el menú">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="main-nav">
                <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-3">
                    @foreach ($links as $route => $label)
                        <li class="nav-item">
                            <a href="{{ route($route) }}"
                               @class(['nav-link', 'active' => request()->routeIs($route)])
                               @if (request()->routeIs($route)) aria-current="page" @endif>
                                {{ $label }}
                            </a>
                        </li>
                    @endforeach

                    <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
                        <a href="{{ route('contact') }}"
                           @class([
                               'btn rounded-pill px-4',
                               'btn-light' => request()->routeIs('contact'),
                               'btn-outline-light' => ! request()->routeIs('contact'),
                           ])>
                            Contacto
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

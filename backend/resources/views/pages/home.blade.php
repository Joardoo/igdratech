<x-layouts.app>
    @php
        // Tarjetas de la fila de puntos fuertes: icono de Bootstrap Icons, título y texto
        $features = [
            ['icon' => 'bi-kanban', 'title' => 'Gestión', 'text' => 'Inventarios, equipos y licencias organizados en un solo sitio.'],
            ['icon' => 'bi-lightning-charge', 'title' => 'Automatización', 'text' => 'Escaneos, avisos y copias de seguridad que se hacen solos.'],
            ['icon' => 'bi-shield-lock', 'title' => 'Privacidad', 'text' => 'Tus datos se quedan en tu equipo, nunca en la nube.'],
        ];
    @endphp

    <section class="hero">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-7">
                    <h1 class="hero-title">
                        Gestión y automatización
                        <span class="text-gradient">para tu empresa</span>
                    </h1>
                    <p class="hero-lead">
                        Creamos aplicaciones que simplifican el día a día: inventario de red,
                        control de equipos y tareas automáticas, con tus datos siempre en tu equipo.
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="{{ route('products') }}" class="btn btn-gradient btn-lg rounded-pill px-4">
                            <i class="bi bi-grid me-2" aria-hidden="true"></i>Ver productos
                        </a>
                        <a href="{{ route('about') }}" class="btn btn-outline-light btn-lg rounded-pill px-4">
                            Conocer más
                        </a>
                    </div>
                </div>

                <div class="col-lg-5 text-center">
                    <img src="{{ asset('images/igdratech-mark-light.png') }}" alt="" class="hero-logo img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section class="features py-5">
        <div class="container">
            <div class="row g-4">
                @foreach ($features as $feature)
                    <div class="col-md-4 feature text-center">
                        <i class="bi {{ $feature['icon'] }} feature-icon" aria-hidden="true"></i>
                        <h2 class="h4 mt-3">{{ $feature['title'] }}</h2>
                        <p class="text-body-secondary mb-0">{{ $feature['text'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="cta-card d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-4">
                <div>
                    <h2 class="display-6 fw-bold">¿Hablamos?</h2>
                    <p class="cta-text mb-0">
                        ¿Necesitas una aplicación para gestionar o automatizar algo en tu empresa?
                        Cuéntanos tu idea y te ayudamos a hacerla realidad.
                    </p>
                </div>
                <a href="{{ route('contact') }}" class="btn btn-light btn-lg px-4 flex-shrink-0">
                    <i class="bi bi-envelope me-2" aria-hidden="true"></i>Contactar
                </a>
            </div>
        </div>
    </section>
</x-layouts.app>

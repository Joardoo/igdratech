<x-layouts.app>
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
</x-layouts.app>

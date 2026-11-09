<x-layouts.app title="Sobre nosotros">
    @php
        // Puntos de "Cómo trabajamos": icono de Bootstrap Icons, título y texto
        $principles = [
            ['icon' => 'bi-shield-lock', 'title' => 'Tus datos, en tu equipo', 'text' => 'Nuestras aplicaciones guardan la información en tus propios equipos. Nada se envía a nuestros servidores.'],
            ['icon' => 'bi-tools', 'title' => 'Pensado para el día a día', 'text' => 'Diseñamos cada herramienta a partir de problemas reales de las empresas, no al revés.'],
            ['icon' => 'bi-translate', 'title' => 'Para todos', 'text' => 'Aplicaciones fáciles de usar y disponibles en varios idiomas.'],
        ];
    @endphp

    <section class="container py-5">
        <div class="col-lg-8">
            <h1 class="display-5 fw-bold">Sobre nosotros</h1>
            <p class="fs-5 text-body-secondary">
                En IgdraTech desarrollamos aplicaciones de gestión y automatización para empresas.
                Nuestro equipo está formado por profesionales con experiencia en el sector tecnológico,
                que conocen de primera mano las necesidades reales del día a día de una empresa.
            </p>
            <p class="fs-5 text-body-secondary mb-0">
                Nuestro primer producto es RemoteInventy, un inventario de red gratuito para Windows,
                y es solo el principio.
            </p>
        </div>
    </section>

    <section class="container py-5">
        <div class="row align-items-center g-5">
            <div class="col-md-4 text-center">
                <img src="{{ asset('images/igdratech-mark-light.png') }}" alt="" class="about-logo img-fluid">
            </div>
            <div class="col-md-8">
                <h2 class="fw-bold">¿Por qué IgdraTech?</h2>
                <p class="fs-5 text-body-secondary mb-0">
                    El nombre se inspira en Yggdrasil, el árbol que en la mitología nórdica une todos los mundos.
                    Nuestras aplicaciones hacen algo parecido: conectan los equipos, los datos y las personas
                    de una empresa.
                </p>
            </div>
        </div>
    </section>

    <section class="container py-5">
        <h2 class="fw-bold mb-4">Cómo trabajamos</h2>
        <div class="row g-4">
            @foreach ($principles as $principle)
                <div class="col-md-4">
                    <div class="d-flex gap-3">
                        <i class="bi {{ $principle['icon'] }} fs-2 text-info" aria-hidden="true"></i>
                        <div>
                            <h3 class="h5">{{ $principle['title'] }}</h3>
                            <p class="text-body-secondary mb-0">{{ $principle['text'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</x-layouts.app>

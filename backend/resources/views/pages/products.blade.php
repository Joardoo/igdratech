{{-- Página de Productos: el contenido lo dibuja la aplicación Angular (frontend/), compilada en public/app --}}
<x-layouts.app title="Productos">
    @if (file_exists(public_path('app/main.js')))
        <app-root></app-root>

        @php
            // La fecha del archivo en la URL obliga al navegador a descargarlo de nuevo cuando se recompila
            $version = filemtime(public_path('app/main.js'));
        @endphp

        @push('styles')
            <link rel="stylesheet" href="{{ asset('app/styles.css') }}?v={{ $version }}">
        @endpush

        @push('scripts')
            <script type="module" src="{{ asset('app/main.js') }}?v={{ $version }}"></script>
        @endpush
    @else
        <section class="container py-5">
            <div class="alert alert-warning mb-0">
                La sección de productos todavía no está compilada. Ejecuta <code>npm run build</code> en la carpeta <code>frontend</code>.
            </div>
        </section>
    @endif
</x-layouts.app>

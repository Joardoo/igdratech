<x-layouts.app title="Contacto">
    <section class="container py-5">
        <div class="row g-5">
            <div class="col-lg-5">
                <h1 class="display-5 fw-bold">Hablemos</h1>
                <p class="fs-5 text-body-secondary">
                    ¿Tienes una idea, una duda sobre nuestras aplicaciones o quieres colaborar con nosotros?
                    Escríbenos y te responderemos lo antes posible.
                </p>
                <a href="mailto:support@igdratech.com" class="link-light text-decoration-none">
                    <i class="bi bi-envelope me-2" aria-hidden="true"></i>support@igdratech.com
                </a>
            </div>

            <div class="col-lg-7">
                <div class="card bg-body-secondary p-4">
                    @if (session('status'))
                        <div class="alert alert-success" role="status">
                            <i class="bi bi-check-circle me-2" aria-hidden="true"></i>{{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('contact.store') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}"
                                   @class(['form-control', 'is-invalid' => $errors->has('name')])
                                   maxlength="100" autocomplete="name" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}"
                                   @class(['form-control', 'is-invalid' => $errors->has('email')])
                                   autocomplete="email" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="message" class="form-label">Mensaje</label>
                            <textarea id="message" name="message" rows="6" maxlength="2000" required
                                      @class(['form-control', 'is-invalid' => $errors->has('message')])>{{ old('message') }}</textarea>
                            @error('message')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-gradient btn-lg rounded-pill px-4">
                            <i class="bi bi-send me-2" aria-hidden="true"></i>Enviar mensaje
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>

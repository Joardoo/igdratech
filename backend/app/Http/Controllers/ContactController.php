<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactMessageRequest;
use App\Models\ContactMessage;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
    /**
     * Guarda el mensaje del formulario y vuelve a la página de contacto con un aviso.
     */
    public function store(StoreContactMessageRequest $request): RedirectResponse
    {
        ContactMessage::create($request->validated());

        return to_route('contact')
            ->with('status', 'Gracias, hemos recibido tu mensaje. Te responderemos lo antes posible.');
    }
}

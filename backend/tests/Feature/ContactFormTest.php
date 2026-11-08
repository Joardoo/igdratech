<?php

use App\Models\ContactMessage;

test('la página de contacto muestra el formulario', function () {
    $response = $this->get(route('contact'));

    $response->assertOk();
    $response->assertSee('Enviar mensaje');
});

test('un mensaje válido se guarda en la base de datos', function () {
    $response = $this->post(route('contact.store'), [
        'name' => 'Ana García',
        'email' => 'ana@example.com',
        'message' => 'Me interesa RemoteInventy para mi empresa.',
    ]);

    $response->assertRedirect(route('contact'));
    $response->assertSessionHas('status');

    $this->assertDatabaseHas('contact_messages', [
        'name' => 'Ana García',
        'email' => 'ana@example.com',
    ]);
});

test('un formulario vacío se rechaza con errores y no guarda nada', function () {
    $response = $this->post(route('contact.store'), []);

    $response->assertSessionHasErrors(['name', 'email', 'message']);
    expect(ContactMessage::count())->toBe(0);
});

test('un email con formato incorrecto se rechaza', function () {
    $response = $this->post(route('contact.store'), [
        'name' => 'Ana García',
        'email' => 'esto-no-es-un-email',
        'message' => 'Hola',
    ]);

    $response->assertSessionHasErrors('email');
    expect(ContactMessage::count())->toBe(0);
});

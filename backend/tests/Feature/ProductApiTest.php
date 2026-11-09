<?php

use Database\Seeders\ProductSeeder;

// Antes de cada test se rellena la base de datos de pruebas con el seeder real
beforeEach(function () {
    $this->seed(ProductSeeder::class);
});

test('la lista de productos devuelve RemoteInventy con su número de funcionalidades', function () {
    $response = $this->getJson(route('api.products.index'));

    $response->assertOk();
    $response->assertJsonCount(1, 'data');
    $response->assertJsonPath('data.0.slug', 'remoteinventy');
    $response->assertJsonPath('data.0.features_count', 20);
    $response->assertJsonMissingPath('data.0.features');
});

test('el detalle de un producto incluye sus funcionalidades', function () {
    $response = $this->getJson(route('api.products.show', 'remoteinventy'));

    $response->assertOk();
    $response->assertJsonPath('data.name', 'RemoteInventy');
    $response->assertJsonCount(20, 'data.features');
    $response->assertJsonStructure([
        'data' => [
            'name', 'slug', 'tagline', 'description', 'logo_url', 'store_url',
            'features' => [['id', 'category', 'title', 'description', 'icon']],
        ],
    ]);
});

test('un producto que no existe devuelve 404', function () {
    $this->getJson(route('api.products.show', 'no-existe'))->assertNotFound();
});

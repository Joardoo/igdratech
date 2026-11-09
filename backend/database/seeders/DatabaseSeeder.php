<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Datos iniciales de la web (se ejecuta con: php artisan db:seed).
     */
    public function run(): void
    {
        $this->call(ProductSeeder::class);
    }
}

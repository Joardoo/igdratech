<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

/**
 * Rellena las tablas products y features con las aplicaciones de IgdraTech.
 * Los textos salen de la ficha de RemoteInventy en Microsoft Store.
 */
class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // updateOrCreate: si ya existe un producto con ese slug lo actualiza, si no lo crea.
        // Así el seeder se puede ejecutar varias veces sin duplicar nada.
        $remoteInventy = Product::updateOrCreate(
            ['slug' => 'remoteinventy'],
            [
                'name' => 'RemoteInventy',
                'tagline' => 'Inventario de red para Windows',
                'description' => 'Descubre todos los equipos de tu red local y los reúne en un inventario siempre al día: '
                    .'ordenadores, servidores, impresoras, móviles, routers, cámaras y cualquier otro aparato conectado. '
                    .'Sin cuentas, sin suscripciones y sin sacar tus datos de tu equipo: es gratuita y funciona aunque no haya internet.',
                'logo' => 'images/remoteinventy/logo.png',
                'store_url' => 'https://apps.microsoft.com/detail/9nd1d103861x?hl=es-ES',
            ],
        );

        // Se borran y se vuelven a crear las funcionalidades para que siempre coincidan con esta lista.
        $remoteInventy->features()->delete();
        $remoteInventy->features()->createMany($this->remoteInventyFeatures());
    }

    /**
     * Funcionalidades de RemoteInventy, agrupadas por categoría.
     *
     * @return array<int, array{category: string, icon: string, title: string, description: string}>
     */
    private function remoteInventyFeatures(): array
    {
        return [
            ['category' => 'Escaneo', 'icon' => 'bi-radar', 'title' => 'Descubrimiento automático', 'description' => 'Encuentra los equipos de tu red local en unos segundos, con su IP, su MAC, su nombre y el fabricante.'],
            ['category' => 'Escaneo', 'icon' => 'bi-bell', 'title' => 'Avisos de equipos nuevos', 'description' => 'Te avisa cuando aparece en la red un equipo que no se había visto antes.'],
            ['category' => 'Escaneo', 'icon' => 'bi-exclamation-triangle', 'title' => 'Conflictos de IP', 'description' => 'Detecta cuándo dos equipos intentan usar la misma dirección IP.'],
            ['category' => 'Escaneo', 'icon' => 'bi-activity', 'title' => 'Equipos conectados ahora', 'description' => 'Muestra en todo momento qué equipos están encendidos y conectados.'],

            ['category' => 'Inventario', 'icon' => 'bi-folder2-open', 'title' => 'Carpetas y descripciones', 'description' => 'Organiza los equipos en carpetas y añade a cada uno una descripción y notas.'],
            ['category' => 'Inventario', 'icon' => 'bi-key', 'title' => 'Credenciales cifradas', 'description' => 'Guarda los usuarios y contraseñas de acceso a cada equipo, siempre cifrados.'],
            ['category' => 'Inventario', 'icon' => 'bi-patch-check', 'title' => 'Licencias de software', 'description' => 'Lleva el control de las licencias asociadas a cada equipo.'],
            ['category' => 'Inventario', 'icon' => 'bi-box-seam', 'title' => 'Software instalado', 'description' => 'Registra el software instalado en cada equipo.'],
            ['category' => 'Inventario', 'icon' => 'bi-stars', 'title' => 'Asistente con IA', 'description' => 'Pregunta sobre tu inventario en lenguaje natural. Solo se envían la pregunta y la estructura de las tablas, nunca tus datos.'],

            ['category' => 'Esquemas', 'icon' => 'bi-diagram-3', 'title' => 'Topología de red', 'description' => 'Dibuja tu red arrastrando equipos del inventario: switches, routers y conexiones con colores y notas.'],
            ['category' => 'Esquemas', 'icon' => 'bi-hdd-rack', 'title' => 'Racks', 'description' => 'Representa los racks con sus unidades numeradas y los equipos montados en cada una.'],
            ['category' => 'Esquemas', 'icon' => 'bi-broadcast', 'title' => 'Estado en vivo', 'description' => 'Los equipos del esquema muestran en directo si están encendidos o apagados.'],

            ['category' => 'Diagnóstico', 'icon' => 'bi-reception-4', 'title' => 'Ping y traceroute', 'description' => 'Comprueba la conexión con cualquier equipo y ve el resultado según llega.'],
            ['category' => 'Diagnóstico', 'icon' => 'bi-door-open', 'title' => 'Comprobación de puertos', 'description' => 'Revisa qué puertos tiene abiertos un equipo.'],
            ['category' => 'Diagnóstico', 'icon' => 'bi-printer', 'title' => 'Impresoras de red', 'description' => 'Consulta el nivel de tóner o tinta y sus avisos, e imprime una página de prueba.'],

            ['category' => 'Acceso remoto', 'icon' => 'bi-terminal', 'title' => 'Terminal SSH', 'description' => 'Abre una sesión SSH con un equipo sin salir de la aplicación, con las credenciales guardadas.'],
            ['category' => 'Acceso remoto', 'icon' => 'bi-display', 'title' => 'Escritorio remoto (RDP)', 'description' => 'Conéctate al escritorio de un equipo Windows desde la propia aplicación.'],

            ['category' => 'Seguridad', 'icon' => 'bi-shield-lock', 'title' => 'Tus datos son tuyos', 'description' => 'Todo se guarda en tu equipo: el inventario no se envía a ningún sitio.'],
            ['category' => 'Seguridad', 'icon' => 'bi-people', 'title' => 'Varios usuarios', 'description' => 'Crea usuarios administradores o normales, que pueden entrar desde el navegador de su ordenador.'],
            ['category' => 'Seguridad', 'icon' => 'bi-cloud-arrow-down', 'title' => 'Copias de seguridad cifradas', 'description' => 'Haz copias de seguridad cifradas del inventario y restáuralas cuando lo necesites.'],
        ];
    }
}

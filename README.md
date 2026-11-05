# IgdraTech - web corporativa

Web corporativa de IgdraTech hecha con Laravel 13, Angular 22 y Bootstrap 5.3 para la prueba
técnica de SoftNeos. Todo funciona en local.

He decidido hacer todo en castellano desde el principio para que quede en un solo idioma: los
textos de la web, la documentación y los mensajes de commit. Los nombres en el código (clases,
variables, tablas) van en inglés, que es la convención de Laravel y Angular.

## Requisitos

- PHP 8.3 o superior con la extensión `pdo_sqlite` (he usado PHP 8.5)
- Composer 2
- Node.js 22, 24 o 26 y npm
- Git

En Windows he instalado PHP y Composer con [php.new](https://php.new), que es lo que indica la
[documentación de Laravel](https://laravel.com/docs/installation#installing-php). En PowerShell:

```powershell
Set-ExecutionPolicy Bypass -Scope Process -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072; iex ((New-Object System.Net.WebClient).DownloadString('https://php.new/install/windows/8.5'))
```

![Instalación con php.new](docs/capturas/instalacion/01-php-new.png)

Después hay que reiniciar la terminal y comprobar que funciona:

```powershell
php -v
composer -V
```

![Versiones de PHP y Composer](docs/capturas/instalacion/02-php-composer-laravel.png)

Para desarrollar la parte de Angular también he instalado Angular CLI:

```powershell
npm install -g @angular/cli@22
ng version
```

![Versión de Angular CLI](docs/capturas/instalacion/03-angular-cli.png)

## Uso de la IA

Está explicado en [docs/uso-ia.md](docs/uso-ia.md).

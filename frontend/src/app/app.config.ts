import { APP_BASE_HREF } from '@angular/common';
import { provideHttpClient } from '@angular/common/http';
import { ApplicationConfig, provideBrowserGlobalErrorListeners } from '@angular/core';
import { provideRouter, withComponentInputBinding } from '@angular/router';
import { routes } from './app.routes';

export const appConfig: ApplicationConfig = {
  providers: [
    provideBrowserGlobalErrorListeners(),
    // withComponentInputBinding: los parámetros de la URL (:slug) llegan a los input() del componente
    provideRouter(routes, withComponentInputBinding()),
    // HttpClient: lo usa ProductService para llamar a la API de Laravel
    provideHttpClient(),
    // La aplicación vive en /productos dentro de la web de Laravel:
    // las rutas de Angular se escriben sin ese prefijo ('' = /productos).
    { provide: APP_BASE_HREF, useValue: '/productos' },
  ],
};

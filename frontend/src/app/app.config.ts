import { APP_BASE_HREF } from '@angular/common';
import { ApplicationConfig, provideBrowserGlobalErrorListeners } from '@angular/core';
import { provideRouter } from '@angular/router';
import { routes } from './app.routes';

export const appConfig: ApplicationConfig = {
  providers: [
    provideBrowserGlobalErrorListeners(),
    provideRouter(routes),
    // La aplicación vive en /productos dentro de la web de Laravel:
    // las rutas de Angular se escriben sin ese prefijo ('' = /productos).
    { provide: APP_BASE_HREF, useValue: '/productos' },
  ],
};

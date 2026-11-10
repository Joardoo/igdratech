import { Routes } from '@angular/router';

// Rutas relativas a /productos (ver APP_BASE_HREF en app.config.ts)
export const routes: Routes = [
  {
    path: '',
    loadComponent: () => import('./products/product-list/product-list').then((m) => m.ProductList),
    title: 'Productos · IgdraTech',
  },
  { path: '**', redirectTo: '' },
];

import { HttpClient } from '@angular/common/http';
import { inject, Service } from '@angular/core';
import { map, Observable } from 'rxjs';
import { ApiResponse, Product } from './product';

/**
 * Habla con la API de productos de Laravel.
 */
@Service()
export class ProductService {
  private readonly http = inject(HttpClient);

  /** Lista de productos (GET /api/products). */
  getProducts(): Observable<Product[]> {
    return this.http
      .get<ApiResponse<Product[]>>('/api/products')
      .pipe(map((response) => response.data));
  }

  /** Un producto con todas sus funcionalidades (GET /api/products/{slug}). */
  getProduct(slug: string): Observable<Product> {
    return this.http
      .get<ApiResponse<Product>>(`/api/products/${slug}`)
      .pipe(map((response) => response.data));
  }
}

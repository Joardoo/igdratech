import { Component, inject } from '@angular/core';
import { rxResource } from '@angular/core/rxjs-interop';
import { RouterLink } from '@angular/router';
import { ProductService } from '../product.service';

/**
 * Listado de productos (/productos): una tarjeta por cada aplicación de la base de datos.
 */
@Component({
  imports: [RouterLink],
  selector: 'app-product-list',
  styleUrl: './product-list.scss',
  templateUrl: './product-list.html',
})
export class ProductList {
  private readonly productService = inject(ProductService);

  // rxResource se suscribe a la petición y expone su estado: value(), isLoading() y error()
  protected readonly products = rxResource({
    stream: () => this.productService.getProducts(),
    defaultValue: [],
  });
}

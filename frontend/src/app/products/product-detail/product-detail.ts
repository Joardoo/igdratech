import { Component, computed, inject, input, signal } from '@angular/core';
import { rxResource } from '@angular/core/rxjs-interop';
import { RouterLink } from '@angular/router';
import { ProductService } from '../product.service';

/**
 * Detalle de un producto (/productos/:slug) con buscador y filtro de funcionalidades.
 */
@Component({
  imports: [RouterLink],
  selector: 'app-product-detail',
  styleUrl: './product-detail.scss',
  templateUrl: './product-detail.html',
})
export class ProductDetail {
  private readonly productService = inject(ProductService);

  // El :slug de la URL llega aquí automáticamente (withComponentInputBinding en app.config.ts)
  readonly slug = input.required<string>();

  // Pide el producto a la API cada vez que cambia el slug
  protected readonly product = rxResource({
    params: () => this.slug(),
    stream: ({ params: slug }) => this.productService.getProduct(slug),
  });

  // Lo que ha escrito el usuario en el buscador y la categoría elegida (null = todas)
  protected readonly search = signal('');
  protected readonly category = signal<string | null>(null);

  protected readonly features = computed(() => this.product.value()?.features ?? []);

  // Categorías sin repetir, en el orden en que aparecen
  protected readonly categories = computed(() => [
    ...new Set(this.features().map((feature) => feature.category)),
  ]);

  // Se recalcula sola cada vez que cambia el buscador, la categoría o el producto
  protected readonly filteredFeatures = computed(() => {
    const text = normalize(this.search());
    const category = this.category();

    return this.features().filter(
      (feature) =>
        (category === null || feature.category === category) &&
        normalize(`${feature.title} ${feature.description} ${feature.category}`).includes(text),
    );
  });
}

/** Minúsculas y sin acentos, para que "diagnostico" encuentre "Diagnóstico". */
function normalize(text: string): string {
  return text
    .toLowerCase()
    .normalize('NFD')
    .replace(/[̀-ͯ]/g, '');
}

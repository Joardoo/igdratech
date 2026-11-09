import { provideHttpClient } from '@angular/common/http';
import { HttpTestingController, provideHttpClientTesting } from '@angular/common/http/testing';
import { TestBed } from '@angular/core/testing';
import { firstValueFrom } from 'rxjs';
import { Product } from './product';
import { ProductService } from './product.service';

describe('ProductService', () => {
  let service: ProductService;
  let httpTesting: HttpTestingController;

  const remoteInventy: Product = {
    name: 'RemoteInventy',
    slug: 'remoteinventy',
    tagline: 'Inventario de red para Windows',
    description: 'Descripción',
    logo_url: '/images/remoteinventy/logo.png',
    store_url: null,
  };

  beforeEach(() => {
    // provideHttpClientTesting sustituye las peticiones reales por unas simuladas
    TestBed.configureTestingModule({
      providers: [provideHttpClient(), provideHttpClientTesting()],
    });
    service = TestBed.inject(ProductService);
    httpTesting = TestBed.inject(HttpTestingController);
  });

  afterEach(() => httpTesting.verify());

  it('pide la lista a /api/products y devuelve el contenido de "data"', async () => {
    const result = firstValueFrom(service.getProducts());

    httpTesting.expectOne('/api/products').flush({ data: [remoteInventy] });

    expect(await result).toEqual([remoteInventy]);
  });

  it('pide un producto por su slug', async () => {
    const result = firstValueFrom(service.getProduct('remoteinventy'));

    httpTesting.expectOne('/api/products/remoteinventy').flush({ data: remoteInventy });

    expect((await result).name).toBe('RemoteInventy');
  });
});

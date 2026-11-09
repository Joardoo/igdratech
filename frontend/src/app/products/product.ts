// Tipos que describen el JSON que devuelve la API de Laravel (app/Http/Resources).

export interface Feature {
  id: number;
  category: string;
  title: string;
  description: string;
  icon: string;
}

export interface Product {
  name: string;
  slug: string;
  tagline: string;
  description: string;
  logo_url: string;
  store_url: string | null;
  features_count?: number; // solo viene en la lista (GET /api/products)
  features?: Feature[]; // solo viene en el detalle (GET /api/products/{slug})
}

// Laravel envuelve las respuestas de los API Resources en { "data": ... }
export interface ApiResponse<T> {
  data: T;
}

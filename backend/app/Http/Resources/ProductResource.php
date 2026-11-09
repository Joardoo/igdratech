<?php

namespace App\Http\Resources;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Formato JSON de un producto en la API.
 *
 * @mixin Product
 */
class ProductResource extends JsonResource
{
    /**
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name,
            'slug' => $this->slug,
            'tagline' => $this->tagline,
            'description' => $this->description,
            'logo_url' => asset($this->logo),
            'store_url' => $this->store_url,
            // Solo aparecen si el controlador los ha pedido (withCount / load)
            'features_count' => $this->whenCounted('features'),
            'features' => FeatureResource::collection($this->whenLoaded('features')),
        ];
    }
}

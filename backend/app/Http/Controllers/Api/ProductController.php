<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

/**
 * API de productos que consume la parte de Angular.
 */
class ProductController extends Controller
{
    /**
     * GET /api/products: lista de productos con el número de funcionalidades de cada uno.
     */
    public function index(): AnonymousResourceCollection
    {
        $products = Product::withCount('features')->orderBy('name')->get();

        return ProductResource::collection($products);
    }

    /**
     * GET /api/products/{slug}: un producto con todas sus funcionalidades.
     */
    public function show(Product $product): ProductResource
    {
        return new ProductResource($product->load('features'));
    }
}

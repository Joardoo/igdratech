<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Funcionalidad de una aplicación (tabla features).
 */
#[Fillable(['category', 'title', 'description', 'icon'])]
class Feature extends Model
{
    /**
     * Aplicación a la que pertenece: cada funcionalidad es de un producto.
     *
     * @return BelongsTo<Product, $this>
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}

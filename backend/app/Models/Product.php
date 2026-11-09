<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Aplicación de IgdraTech (tabla products).
 */
#[Fillable(['name', 'slug', 'tagline', 'description', 'logo', 'store_url'])]
class Product extends Model
{
    /**
     * Funcionalidades de la aplicación: un producto tiene muchas.
     *
     * @return HasMany<Feature, $this>
     */
    public function features(): HasMany
    {
        return $this->hasMany(Feature::class);
    }
}

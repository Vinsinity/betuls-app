<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Product extends Model
{
    use HasFactory, HasSlug;

    protected $fillable = ['name', 'slug', 'detail', 'brand_id', 'price'];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(ProductImage::class);
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class,'product_categories')->withTimestamps();
    }

    public function showPrice(): string
    {
        $priceWithoutTax = $this->attributes['price'] / 100;
        $taxRate = config('app.tax') / 100;
        $price = ($priceWithoutTax * $taxRate) + $priceWithoutTax;
        return config('app.currency_sign').number_format($price,2,',','.');
    }

    public function priceWithTax()
    {
        return $this->attributes['price'] + round(($this->attributes['price'] * config('app.tax')) / 100, 2);
    }
}

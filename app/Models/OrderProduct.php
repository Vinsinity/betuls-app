<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class OrderProduct extends Model
{
    use HasFactory;

    protected $fillable = ['order_id', 'product_id', 'quantity', 'price'];

    public function product(): HasOne
    {
        return $this->hasOne(Product::class,'id','product_id');
    }

    public function showPrice(): string
    {
        $priceWithoutTax = $this->attributes['price'] / 100;
        return config('app.currency_sign').number_format($priceWithoutTax,2,',','.');
    }

    public function showPriceWithTax(): string
    {
        $priceWithoutTax = $this->attributes['price'] / 100;
        $taxRate = config('app.tax') / 100;
        $price = ($priceWithoutTax * $taxRate) + $priceWithoutTax;
        return config('app.currency_sign').number_format($price,2,',','.');
    }

    public function showPriceTotal(): string
    {
        $priceWithoutTax = $this->attributes['price'];
        $quantity = $this->attributes['quantity'];
        $price = ($priceWithoutTax * $quantity) / 100;
        return config('app.currency_sign').number_format($price,2,',','.');
    }
}

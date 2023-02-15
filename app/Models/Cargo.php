<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;

    protected $fillable = ['name','price'];

    public function showPrice(): string
    {
        $price = $this->attributes['price'] / 100;
        return config('app.currency_sign').number_format($price,2,',','.');
    }
}

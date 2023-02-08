<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Carbon;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','order_number','order_status_id','cargo_id','total_price','total_quantity','user_address_id','shipping_address_id','tracking_number'];

    public function products(): HasMany
    {
        return $this->hasMany(OrderProduct::class);
    }

    public function status(): HasOne
    {
        return $this->hasOne(OrderStatus::class,'id','order_status_id');
    }

    public function user(): HasOne
    {
        return $this->hasOne(User::class,'id','user_id');
    }

    public function cargo(): HasOne
    {
        return $this->hasOne(Cargo::class,'id','cargo_id');
    }

    public function address(): HasOne
    {
        return $this->hasOne(UserAddress::class,'id','user_address_id');
    }

    public function shippingAddress(): HasOne
    {
        return $this->hasOne(UserAddress::class,'id','shipping_address_id');
    }

    public function getCreatedAtAttribute(): string
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->attributes['created_at'])->translatedFormat('d F Y');
    }

    public function getUpdatedAtAttribute(): string
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->attributes['updated_at'])->format('d F Y');
    }

    public function createDateFull(): string
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->attributes['created_at'])->translatedFormat('d F Y l H:i');
    }

    public function updateDateFull(): string
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->attributes['updated_at'])->format('d F Y l H:i');
    }

    public function getPriceAttribute(): string
    {
        return number_format($this->attributes['price'],2,'.','');
    }
}

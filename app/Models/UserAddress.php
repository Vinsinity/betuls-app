<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use PHPUnit\Framework\Constraint\Count;

class UserAddress extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'name', 'surname', 'city_id', 'county_id', 'district_id', 'neighborhood_id', 'phone_number', 'address', 'user_id'];

    public function city(): HasOne
    {
        return $this->hasOne(City::class,'id','city_id');
    }

    public function county(): HasOne
    {
        return $this->hasOne(County::class,'id','county_id');
    }

    public function district(): HasOne
    {
        return $this->hasOne(District::class,'id','district_id');
    }

    public function neighborhood(): HasOne
    {
        return $this->hasOne(Neighborhood::class,'id','neighborhood_id');
    }
}

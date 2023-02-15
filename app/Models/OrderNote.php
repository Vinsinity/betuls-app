<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class OrderNote extends Model
{
    use HasFactory;

    protected $fillable = ['author_id','order_id','note'];

    public function author(): HasOne
    {
        return $this->hasOne(Admin::class,'id','author_id');
    }
}

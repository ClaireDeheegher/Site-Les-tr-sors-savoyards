<?php

    namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PCart extends Model
{
    protected $fillable = [
        'cart_Id',
        'products_Id',
        'quantity',
    ];
    public function produits() : HasMany{
        return $this->hasMany(Produits::class);
    }

    public function cart() : HasOne{
        return $this->hasOne(Cart::class);
    }

    public function order(): HasOne
    {
        return $this->hasOne(Order::class);
    }
}

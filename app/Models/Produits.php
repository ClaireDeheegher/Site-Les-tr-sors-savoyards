<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produits extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom', 'prix', 'quantite', 'poid', 'description', 'categorie_id'
    ];

    public function categorie()
    {
        return $this->belongsTo(categorie::class);
    {
    }
}
}

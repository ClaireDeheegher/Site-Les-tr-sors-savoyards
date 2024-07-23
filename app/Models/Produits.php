<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Builder;

class Produits extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom', 'prix', 'quantite', 'poid', 'description', 'categories_id'
    ];

    public static function find(string $id) {}


    public function categorie(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(categorie::class);
    }

    public function pCart() : HasMany{
        return $this->hasMany(PCart::class);
    }


}

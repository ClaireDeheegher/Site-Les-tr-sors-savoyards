<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categorie extends Model
{
    public $timestamps = false;

    use HasFactory;

    protected $fillable = ['name'];

    public static function find(string $id) {}

    public function produits(): HasMany
    {
        return $this->hasMany(categorie::class);
    }
}

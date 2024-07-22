<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'ref', // Ajoutez les champs que vous souhaitez rendre accessibles en écriture
    ];
    protected $table =
        'cart'; // Assurez-vous que le nom de la table est correctement défini ici

    public function pCart() : HasOne{
        return $this->hasOne(PCart::class);
    }
}

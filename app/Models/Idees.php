<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Idees extends Model
{
    use HasFactory;

    protected $fillable=[
        'auteur_nom_complet',
        'auteur_email',
        'libelle',
        'description',

    ];

    public function commentaires(): HasMany{

        return $this->hasMany(Commentaire::class);
    }


    public function categories(): BelongsTo{

        return $this->belongsTo(Categorie::class);
    }
}



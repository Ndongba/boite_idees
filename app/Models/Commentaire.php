<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Commentaire extends Model
{
    use HasFactory;

    protected $fillable=[
        'nom_complet_auteur',
        'libelle',
        'idees_id',
    ];

    public function idees(): BelongsTo{

        return $this->belongsTo(Idees::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rapport extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'contenu',
        'date_rapport',
        'collecte_evenement_id',
    ];

    // Relation avec l'événement de collecte
    public function collecteEvenement()
    {
        return $this->belongsTo(CollecteEvenement::class);
    }
}
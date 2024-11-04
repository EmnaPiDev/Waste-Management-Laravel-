<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avis extends Model
{
    use HasFactory;

    protected $fillable = ['auteur', 'contenu', 'campagne_sensibilisation_id'];

    public function campagne()
    {
        return $this->belongsTo(CampagneSensibilisation::class, 'campagne_sensibilisation_id');
    }
}

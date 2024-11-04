<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampagneSensibilisation extends Model
{
    protected $fillable = ['titre', 'date_debut', 'date_fin'];

    public function avis()
    {
        return $this->hasMany(Avis::class, 'campagne_sensibilisation_id');
    }
}

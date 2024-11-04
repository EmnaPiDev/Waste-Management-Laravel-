<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planning extends Model
{
    use HasFactory;
    protected $table = 'plannings';
    protected $fillable = [
        'dateCollecte',
        'heureDebut',
        'remarques',
        
    ];
    public function equipements()
{
    return $this->belongsToMany(Equipement::class, 'equipement_planning');
}

   
}

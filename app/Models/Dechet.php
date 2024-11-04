<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ZoneCollecte;  

class Dechet extends Model
{
    use HasFactory;

    // Le nom de la table si ce n'est pas "wastes"
    protected $table = 'dechets';

    // Les colonnes qui peuvent être mass-assignable
    protected $fillable = [
        'type', 
        'description',
        'zone_collecte_id' // Ajout de la clé étrangère ici

    ];
    public function zoneCollecte()
    {
        return $this->belongsTo(ZoneCollecte::class);
    }
    
}

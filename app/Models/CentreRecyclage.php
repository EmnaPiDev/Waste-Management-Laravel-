<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CentreRecyclage extends Model
{
    use HasFactory;
    protected $table = 'centre_recyclages'; 
    protected $fillable = [
        'name',              // nom
        'address',          // adresse
        'city', 
        'material_type',     // type_materiaux
        'capacity',          // capacité
        'number_of_employees', // nombre d'employés
        'contact_number',     // Numéro de contact
        'email',              // E-mail
        'website'
    ];
    public function reclamations()
    {
        return $this->hasMany(Reclamation::class, 'centre_recyclage_id'); 
    }
}
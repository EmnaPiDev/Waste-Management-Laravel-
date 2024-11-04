<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reclamation extends Model
{
    use HasFactory;

    protected $table = 'reclamations'; 

    protected $fillable = [
        'subject',     
        'description',  
       
        'status',    
        'centre_recyclage_id'   
    ];

    // Définition des états valides
    const STATUS_PENDING = 'pending';
    const STATUS_RESOLVED = 'resolved';
    const STATUS_REJECTED = 'rejected';

    // Liste des statuts valides
    public static function validStatuses()
    {
        return [
            self::STATUS_PENDING,
            self::STATUS_RESOLVED,
            self::STATUS_REJECTED,
        ];
    }

    // Vérifier si le statut est valide
    public function isValidStatus($status)
    {
        return in_array($status, self::validStatuses());
    }
    public function centreRecyclage()
    {
        return $this->belongsTo(CentreRecyclage::class, 'centre_recyclage_id'); 
    }
}

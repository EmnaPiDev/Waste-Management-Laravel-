<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipement extends Model
{
    use HasFactory;

    protected $table = 'equipements';
    protected $fillable = [
        'name',
        'validity',
        'disponibility',
        'quantity',
        'image',
    ];
    public function plannings()
{
    return $this->belongsToMany(Planning::class, 'equipement_planning');
}

}

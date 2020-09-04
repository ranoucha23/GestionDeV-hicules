<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\vehicule;
class vehicule extends Model
{
    protected $table = 'vehicules';
    protected $fillable = [
        'id',
        'created_at',
        'updated_at',
        'nom',
        'marque_id',
        'modele_id'
    ];
}

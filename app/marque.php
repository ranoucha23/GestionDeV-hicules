<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class marque extends Model
{
    protected $table = 'marques';
    protected $fillable = [
        'marque_id',
        'created_at',
        'updated_at',
        'nom',
    ];


    function myVe()
     { 
     return $this->hasMany('App\vehicule','marques_id','id');

     }
}

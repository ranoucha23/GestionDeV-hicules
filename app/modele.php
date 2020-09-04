<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modele extends Model
{
    protected $table = 'modeles';
    protected $fillable = [
        'modele_id',
        'created_at',
        'updated_at',
        'nom',
    ];



    function mycar()
      { 
        return $this->hasMany('App\vehicule','modeles_id','id');

     }
}

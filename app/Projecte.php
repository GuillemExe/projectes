<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projecte extends Model
{
    //
    protected $fillable = ['nom', 'slug'];

    // Retorna el projecte de la tasca
    // Relació de 1:1
    public function tasques() {
        return $this->hasMany('App\Tasca');
    }
}

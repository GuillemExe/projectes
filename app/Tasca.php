<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tasca extends Model
{
    // Forcem el nom de la taula a la base de dades
    protected $table = 'tasques';
    protected $fillable = ['nom', 'slug', 'completada', 'descripcio', 'projecte_id'];

    // Retorna el projecte de la tasca
    // Relació de 1:1
    public function project() {
        return $this->belongsTo('App\Projecte');
    }
}

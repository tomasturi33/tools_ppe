<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    public function encuesta(){
        return $this->belongsTo('App\Models\Encuesta'); //Pertenece a una encuesta.
    }

    public function opciones(){
        return $this->hasMany('App\Models\Opcion'); //Tiene varias opciones.
    }
}

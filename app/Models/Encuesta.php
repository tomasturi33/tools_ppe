<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
    public function preguntas(){
        return $this->hasMany('App\Models\Pregunta'); //Tiene varias preguntas.
    }

    public function tips(){
        return $this->hasMany('App\Models\Tip'); //Tiene varias tips.
    }

    public function datos_requeridos(){
        return $this->hasOne('App\Models\DatosRequeridos'); //Pertenece a datos requeridos.
    }
}

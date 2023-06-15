<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Opcion extends Model
{
    public function pregunta(){
        return $this->belongsTo(Pregunta::class); //Pertenece a una pregunta.
    }
}
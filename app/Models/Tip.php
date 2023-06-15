<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tip extends Model
{
    public function encuesta(){
        return $this->belongsTo('App\Models\Encuesta'); //Pertenece a una encuesta.
    }
}

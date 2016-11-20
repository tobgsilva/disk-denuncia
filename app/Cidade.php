<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    public function estado()
    {
    	return $this->belongsTo('App\Estado');
    }
  
    public function entrevistados()
    {
        return $this->hasMany('App\Entrevistado');
    }
}

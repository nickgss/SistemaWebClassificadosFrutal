<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    public function anuncios()
    {
    	return $this->hasMany('App\Anuncio','tipo_id');
    }
}

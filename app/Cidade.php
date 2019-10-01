<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    public function anuncios()
    {
    	return $this->hasMany('App\Anuncio','cidade_id');
    }
}

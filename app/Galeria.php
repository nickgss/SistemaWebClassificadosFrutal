<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    //
    public function anuncio()
    {
    	return $this->belongsTo('App\Anuncio','anuncio_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anuncio extends Model
{
    protected $table = "anuncios";
    
    public function tipo()
    {
    	return $this->belongsTo('App\Tipo','tipo_id');
    }
    public function cidade()
    {
    	return $this->belongsTo('App\Cidade','cidade_id');
    }
    public function galeria()
    {
    	return $this->hasMany('App\Galeria','anuncio_id');
    }
}

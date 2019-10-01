<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Anuncio;

class AnuncioController extends Controller
{
    //
    public function index($id)
    {
    	$anuncio = Anuncio::find($id);
    	$galeria = $anuncio->galeria()->orderBy('ordem')->get();
    	$direcaoImagem = ['center-align','left-align','right-align'];

    	$seo = [
    		'titulo'=>$anuncio->titulo,
			'descricao'=>$anuncio->descricao,
			'imagem'=>asset($anuncio->imagem),
			'url'=> route('site.anuncio',[$anuncio->id,str_slug($anuncio->titulo,'_')])
    	];


    	return view('site.anuncio',compact('anuncio','galeria','direcaoImagem','seo'));
    }
}

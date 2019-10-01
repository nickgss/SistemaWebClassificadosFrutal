<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Anuncio;
use App\Slide;
use App\Tipo;
use App\Cidade;

class HomeController extends Controller
{
    //
    public function index()
    {
    	$anuncios = Anuncio::where('publicar','=','sim')->orderBy('id','desc')->paginate(20);
    	$slides = Slide::where('publicado','=','sim')->orderBy('ordem')->get();
    	$direcaoImagem = ['center-align','left-align','right-align'];
    	$paginacao = true;
    	$tipos = Tipo::orderBy('titulo')->get();
    	$cidades = Cidade::orderBy('nome')->get();

    	return view('site.home',compact('anuncios','slides','direcaoImagem','paginacao','tipos','cidades'));
    }
    public function busca(Request $request)
    {
    	$busca = $request->all();
    	

    	$paginacao = false;
    	$tipos = Tipo::orderBy('titulo')->get();
    	$cidades = Cidade::orderBy('nome')->get();

    	if($busca['status'] == 'todos'){
    		$testeStatus = [
    			['status','<>',null]
    		];
    	}else{
    		$testeStatus = [
    			['status','=',$busca['status']]
    		];
    	}
    	if($busca['tipo_id'] == 'todos'){
    		$testeTipo = [
    			['tipo_id','<>',null]
    		];
    	}else{
    		$testeTipo = [
    			['tipo_id','=',$busca['tipo_id']]
    		];
    	}
    	if($busca['cidade_id'] == 'todos'){
    		$testeCidade = [
    			['cidade_id','<>',null]
    		];
    	}else{
    		$testeCidade = [
    			['cidade_id','=',$busca['cidade_id']]
    		];
    	}    	

    	$testeValor = [
    		[['valor','>=','0']],
          	[['valor','<=','500']],
          	[['valor','>=','500'],['valor','<=','1000']],
          	[['valor','>=','1000'],['valor','<=','5000']],
          	[['valor','>=','5000'],['valor','<=','10000']],
          	[['valor','>=','10000'],['valor','<=','50000']],
          	[['valor','>=','50000'],['valor','<=','100000']],
          	[['valor','>=','100000'],['valor','<=','200000']],
          	[['valor','>=','200000'],['valor','<=','300000']],
          	[['valor','>=','300000'],['valor','<=','500000']],
          	[['valor','>=','500000'],['valor','<=','1000000']],
          	[['valor','>=','1000000']]
    		
    	];
    	$numValor = $busca['valor'];

    	if($busca['bairro'] != ''){
    		$testeBairro = [
    			['endereco','like','%'.$busca['bairro'].'%']
    		];
    	}else{
    		$testeBairro = [
    			['endereco','<>',null]
    		];
    	}
    	


    	$anuncios = Anuncio::where('publicar','=','sim')
    	->where($testeStatus)
    	->where($testeTipo)
    	->where($testeCidade)    	
    	->where($testeValor[$numValor])
    	->where($testeBairro)
    	
    	
    	->orderBy('id','desc')->get();



    	return view('site.busca',compact('busca','anuncios','paginacao','tipos','cidades'));
    }

}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Anuncio;
use App\Tipo;
use App\Cidade;

class AnuncioController extends Controller
{
    public function index()
    {
        $registros = Anuncio::all();
        return view('admin.anuncios.index',compact('registros'));
    }

    public function adicionar()
    {
        
        $tipos = Tipo::all();
        $cidades = Cidade::all();

        return view('admin.anuncios.adicionar',compact('tipos','cidades'));
    }

    public function salvar(Request $request)
    {
        $dados = $request->all();

        $registro = new Anuncio();
        $registro->titulo = $dados['titulo'];
        $registro->descricao = $dados['descricao'];
        $registro->status = $dados['status'];
        $registro->status= $dados['status'];
        $registro->status = $dados['satus'];
        $registro->endereco= $dados['endereco'];
        $registro->cep= $dados['cep'];
        $registro->valor= $dados['valor'];       
        $registro->detalhes= $dados['detalhes'];
        $registro->visualizacoes= 0;
        $registro->publicar= $dados['publicar'];
        if(isset($dados['mapa']) && trim($dados['mapa']) != "" ){
            $registro->mapa = trim($dados['mapa']);
        }else{
            $registro->mapa = null;
        }

        $registro->cidade_id= $dados['cidade_id'];
        $registro->tipo_id= $dados['tipo_id'];

        $file = $request->file('imagem');
    	if($file){
    		$rand = rand(11111,99999);
    		$diretorio = "img/anuncios/".str_slug($dados['titulo'],'_')."/";
    		$ext = $file->guessClientExtension();
    		$nomeArquivo = "_img_".$rand.".".$ext;
    		$file->move($diretorio,$nomeArquivo);
    		$registro->imagem = $diretorio.'/'.$nomeArquivo;
    	}
        
        
        $registro->save();

        \Session::flash('mensagem',['msg'=>'Registro criado com sucesso!','class'=>'green white-text']);

        return redirect()->route('admin.anuncios');
        
    }

    public function editar($id)
    {
        $registro = Anuncio::find($id);

        $tipos = Tipo::all();
        $cidades = Cidade::all();

        return view('admin.anuncios.editar',compact('registro','tipos','cidades'));
        
    }

    public function atualizar(Request $request, $id)
    {
        $registro = Anuncio::find($id);
        $dados = $request->all();

        $registro->titulo = $dados['titulo'];
        $registro->descricao = $dados['descricao'];
        $registro->status = $dados['status'];
        $registro->status= $dados['status'];
        $registro->status= $dados['status'];
        $registro->endereco= $dados['endereco'];
        $registro->cep= $dados['cep'];
        $registro->valor= $dados['valor'];      
        $registro->detalhes= $dados['detalhes'];
        
        $registro->publicar= $dados['publicar'];
        if(isset($dados['mapa']) && trim($dados['mapa']) != "" ){
            $registro->mapa = trim($dados['mapa']);
        }else{
            $registro->mapa = null;
        }

        $registro->cidade_id= $dados['cidade_id'];
        $registro->tipo_id= $dados['tipo_id'];

        $file = $request->file('imagem');
    	if($file){
    		$rand = rand(11111,99999);
    		$diretorio = "img/anuncios/".str_slug($dados['titulo'],'_')."/";
    		$ext = $file->guessClientExtension();
    		$nomeArquivo = "_img_".$rand.".".$ext;
    		$file->move($diretorio,$nomeArquivo);
    		$registro->imagem = $diretorio.'/'.$nomeArquivo;
    	}

        
        $registro ->update();

        \Session::flash('mensagem',['msg'=>'Registro atualizado com sucesso!','class'=>'green white-text']);

        return redirect()->route('admin.anuncios');
    }

    public function deletar($id)
    {
        
        Anuncio::find($id)->delete();

        \Session::flash('mensagem',['msg'=>'Registro deletado com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.anuncios');

    }
}

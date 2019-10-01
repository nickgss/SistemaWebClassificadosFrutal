<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Galeria;
use App\Anuncio;

class GaleriaController extends Controller
{
    //
    public function index($id)
    {
        $anuncio = Anuncio::find($id);

        $registros = $anuncio->galeria()->orderBy('ordem')->get();
        return view('admin.galerias.index',compact('registros','anuncio'));
    }

    public function adicionar($id)
    {
        
        $anuncio = Anuncio::find($id);        

        return view('admin.galerias.adicionar',compact('anuncio'));
    }

    public function salvar(Request $request,$id)
    {
        $anuncio = Anuncio::find($id);

        $dados = $request->all();

        if($anuncio->galeria()->count()){
        	$galeria = $anuncio->galeria()->orderBy('ordem','desc')->first();
        	$ordemAtual = $galeria->ordem;
        }else{
        	$ordemAtual = 0;
        }
        

        if($request->hasFile('imagens')){
        	$arquivos = $request->file('imagens');
        	foreach ($arquivos as $imagem) {
        		$registro = new Galeria();

        		$rand = rand(11111,99999);
	    		$diretorio = "img/anuncios/".str_slug($anuncio->titulo,'_')."/";
	    		$ext = $imagem->guessClientExtension();
	    		$nomeArquivo = "_img_".$rand.".".$ext;
	    		$imagem->move($diretorio,$nomeArquivo);
	    		$registro->anuncio_id = $anuncio->id;
	    		$registro->ordem = $ordemAtual + 1;
	    		$ordemAtual++;
	    		$registro->imagem = $diretorio.'/'.$nomeArquivo;
	    		$registro->save();
        		
        	}
        }
        

        \Session::flash('mensagem',['msg'=>'Registro criado com sucesso!','class'=>'green white-text']);

        return redirect()->route('admin.galerias',$anuncio->id);
        
    }

    public function editar($id)
    {
        $registro = Galeria::find($id);
        $anuncio = $registro->anuncio;      

        return view('admin.galerias.editar',compact('registro','anuncio'));
        
    }

    public function atualizar(Request $request, $id)
    {
        $registro = Galeria::find($id);
        $dados = $request->all();

        $registro->titulo = $dados['titulo'];
        $registro->descricao = $dados['descricao'];
        $registro->ordem = $dados['ordem'];

        $anuncio = $registro->anuncio;
        

        $file = $request->file('imagem');
    	if($file){
    		$rand = rand(11111,99999);
    		$diretorio = "img/anuncios/".str_slug($anuncio->titulo,'_')."/";
    		$ext = $file->guessClientExtension();
    		$nomeArquivo = "_img_".$rand.".".$ext;
    		$file->move($diretorio,$nomeArquivo);
    		$registro->imagem = $diretorio.'/'.$nomeArquivo;
    	}

        
        $registro ->update();

        \Session::flash('mensagem',['msg'=>'Registro atualizado com sucesso!','class'=>'green white-text']);

        return redirect()->route('admin.galerias',$anuncio->id);
    }

    public function deletar($id)
    {
        
        $galeria = Galeria::find($id);
        $anuncio = $galeria->anuncio;

        $galeria->delete();

        \Session::flash('mensagem',['msg'=>'Registro deletado com sucesso!','class'=>'green white-text']);

        return redirect()->route('admin.galerias',$anuncio->id);

    }
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cidade;
use App\Anuncio;

class CidadeController extends Controller
{
    public function index()
    {
        $registros = Cidade::all();
        return view('admin.cidades.index',compact('registros'));
    }

    public function adicionar()
    {
        return view('admin.cidades.adicionar');
    }

    public function salvar(Request $request)
    {
        $dados = $request->all();

        $registro = new Cidade();
        $registro->nome = $dados['nome'];
        $registro->estado = $dados['estado'];
        $registro->sigla_estado = $dados['sigla_estado'];
        
        $registro->save();

        \Session::flash('mensagem',['msg'=>'Registro criado com sucesso!','class'=>'green white-text']);

        return redirect()->route('admin.cidades');
        
    }

    public function editar($id)
    {
        $registro = Cidade::find($id);
        return view('admin.cidades.editar', compact('registro'));
    }

    public function atualizar(Request $request, $id)
    {
        $registro = Cidade::find($id);
        $dados = $request->all();
        $registro->nome = $dados['nome'];
        $registro->estado = $dados['estado'];
        $registro->sigla_estado = $dados['sigla_estado'];
        $registro ->update();

        \Session::flash('mensagem',['msg'=>'Registro atualizado com sucesso!','class'=>'green white-text']);

        return redirect()->route('admin.cidades');
    }

    public function deletar($id)
    {
        if(Anuncio::where('cidade_id','=',$id)->count()){
            
            $msg = "Não é possível deletar essa cidade! Estes anuncios (";
            $anuncios = Anuncio::where('cidade_id','=',$id)->get();

            foreach ($anuncios as $anuncio) {
                $msg .= "id:".$anuncio->id." ";
            }
            $msg .= ") estão relacionados.";

            \Session::flash('mensagem',['msg'=>$msg,'class'=>'red white-text']);
            return redirect()->route('admin.cidades');
        }

        Cidade::find($id)->delete();

        \Session::flash('mensagem',['msg'=>'Registro deletado com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.cidades');

    }
}

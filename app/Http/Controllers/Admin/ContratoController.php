<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contrato;

class ContratoController extends Controller
{
    public function index(Request $req)
    {
        $contratos = Contrato::all();
        $mensagem = $req->session()->get('mensagem');
        return view('AdminContrato.index', compact('contratos', 'mensagem'));
    }

    public function adicionar()
    {
        return view('AdminContrato.adicionar');
    }

    public function salvar(Request $req)
    {
        $contrato = $req->all();

        Contrato::create($contrato);

        $req->session()
          ->flash(
              'mensagem',
              "Contrato $req->tipo_certidao adicionado com sucesso"
          );

        return redirect()->route('AdminContrato');
    }

    public function editar($id)
    {
        $contrato = Contrato::find($id);

        return view('AdminContrato.editar', compact('tabeliao'));
    }

    public function atualizar(Request $req, $id)
    {
        $contrato = $req->all();

        $contrato = Contrato::find($id);
        $contrato->update($contrato);

        $req->session()
            ->flash(
                'mensagem',
                "Contrato $contrato->tipo_certidao atualizado com sucesso"
            );

        return redirect()->route('AdminContrato');
    }

    public function deletar(Request $req, $id)
    {
        $contrato = Contrato::find($id);
        $contrato->delete();

        $req->session()
            ->flash(
                'mensagem',
                "Contrato $contrato->tipo_certidao removido com sucesso"
            );

        return redirect()->route('AdminContrato');
    }
}

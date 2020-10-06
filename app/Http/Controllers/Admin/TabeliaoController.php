<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tabeliao;

class tabeliaoController extends Controller
{
    public function index(Request $req)
    {
        $tabelioes = Tabeliao::all();
        $mensagem = $req->session()->get('mensagem');
        return view('Admin.index', compact('tabelioes', 'mensagem'));
    }

    public function adicionar()
    {
        return view('Admin.adicionar');
    }

    public function salvar(Request $req)
    {
        $tabeliao = $req->all();

        Tabeliao::create($tabeliao);

        $req->session()
          ->flash(
              'mensagem',
              "Tabeliao $req->nome_tabeliao adicionado com sucesso"
          );

        return redirect()->route('Admin');
    }

    public function editar($id)
    {
        $tabeliao = Tabeliao::find($id);

        return view('Admin.editar', compact('tabeliao'));
    }

    public function atualizar(Request $req, $id)
    {
        $tabeliao = $req->all();

        $tabeliao = Tabeliao::find($id);
        $tabeliao->update($tabeliao);

        $req->session()
            ->flash(
                'mensagem',
                "Tabeliao $tabeliao->nome_tabeliao atualizado com sucesso"
            );

        return redirect()->route('Admin');
    }

    public function deletar(Request $req, $id)
    {
        $tabeliao = Tabeliao::find($id);
        $tabeliao->delete();

        $req->session()
            ->flash(
                'mensagem',
                "Tabeliao $tabeliao->nome_tabeliao removido com sucesso"
            );

        return redirect()->route('Admin');
    }
}

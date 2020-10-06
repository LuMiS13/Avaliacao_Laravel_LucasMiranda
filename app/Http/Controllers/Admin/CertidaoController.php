<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Certidao;

class CertidaoController extends Controller
{
    public function index(Request $req)
    {
        $certidoes = Certidao::all();
        $mensagem = $req->session()->get('mensagem');
        return view('AdminCertidao.index', compact('certidoes', 'mensagem'));
    }

    public function adicionar()
    {
        return view('AdminCertidao.adicionar');
    }

    public function salvar(Request $req)
    {
        $certidao = $req->all();

        Certidao::create($certidao);

        $req->session()
          ->flash(
              'mensagem',
              "Certidão $req->tipo_certidao adicionado com sucesso"
          );

        return redirect()->route('admin');
    }

    public function editar($id)
    {
        $certidao = Certidao::find($id);

        return view('AdminCertidao', compact('tabeliao'));
    }

    public function atualizar(Request $req, $id)
    {
        $certidao = $req->all();

        $certidao = Certidao::find($id);
        $certidao->update($certidao);

        $req->session()
            ->flash(
                'mensagem',
                "Certidão $certidao->tipo_certidao atualizado com sucesso"
            );

        return redirect()->route('AdminCertidao');
    }

    public function deletar(Request $req, $id)
    {
        $certidao = Certidao::find($id);
        $certidao->delete();

        $req->session()
            ->flash(
                'mensagem',
                "Certidão $certidao->tipo_certidao removido com sucesso"
            );

        return redirect()->route('AdminCertidao');
    }
}

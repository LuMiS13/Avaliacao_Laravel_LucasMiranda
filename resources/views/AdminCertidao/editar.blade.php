@extends('layout.site')

@section('titulo', 'Editar Certidao')


@section('conteudo')
    <div class="container">
        <h3>Editar Certidao</h3>
        <div class="row">
            <form action="{{ route('AdminCertidao.atualizar', $certidao->id) }}" method="post"
                  enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="put">
                @include('AdminCertidao.form')
                <button type="submit" class="btn btn-success">Salvar</button>
            </form>
        </div>
    </div>
@endsection()

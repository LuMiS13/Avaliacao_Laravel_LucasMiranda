@extends('layout.site')

@section('titulo', 'Adicionar Certidao')


@section('conteudo')
    <div class="container">
        <h3>Adicionar Certidao</h3>
        <div class="row">
            <form action="{{ route('AdminCertidao.salvar') }}" method="post"
                enctype="multipart/form-data">
                @csrf
                @include('AdminCertidao.form')
                <button type="submit" class="btn btn-success">Salvar</button>
            </form>
        </div>
    </div>
@endsection()

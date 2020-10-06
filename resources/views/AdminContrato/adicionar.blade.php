@extends('layout.site')

@section('titulo', 'Adicionar Tabeliao')


@section('conteudo')
    <div class="container">
        <h3>Adicionar Contrato</h3>
        <div class="row">
            <form action="{{ route('AdminContrato.salvar') }}" method="post"
                enctype="multipart/form-data">
                @csrf
                @include('AdminContrato.form')
                <button type="submit" class="btn btn-success">Salvar</button>
            </form>
        </div>
    </div>
@endsection()

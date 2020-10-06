@extends('layout.site')

@section('titulo', 'Editar Tabeliao')


@section('conteudo')
    <div class="container">
        <h3>Editar Contrato</h3>
        <div class="row">
            <form action="{{ route('AdminContrato.atualizar', $contrato->id) }}" method="post"
                  enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="put">
                @include('AdminContrato.form')
                <button type="submit" class="btn btn-success">Salvar</button>
            </form>
        </div>
    </div>
@endsection()

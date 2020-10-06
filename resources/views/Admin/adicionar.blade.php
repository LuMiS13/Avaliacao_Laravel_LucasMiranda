@extends('layout.site')

@section('titulo', 'Adicionar Tabeliao')


@section('conteudo')
    <div class="container">
        <h3>Adicionar Tabeliao</h3>
        <div class="row">
            <form action="{{ route('Admin.salvar') }}" method="post"
                enctype="multipart/form-data">
                @csrf
                @include('Admin.form')
                <button type="submit" class="btn btn-success">Salvar</button>
            </form>
        </div>
    </div>
@endsection()

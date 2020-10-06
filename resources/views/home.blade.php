@extends('layout.site')

@section('titulo', 'Home')

@section('conteudo')
    <div class="container">
        <h3>Lista de Tabeliões</h3>
        <div class="row">
            @foreach($tabelioes as $tabeliao)
                    <div class="card-body">
                        <h5 class="card-title">{{ $tabeliao->nome_tabeliao }}</h5>
                        <a href="#" class="btn btn-success">Comprar</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

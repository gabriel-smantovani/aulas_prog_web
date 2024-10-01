@extends('layouts.app')

<style>

    .action-title-page {
        display: flex;
        justify-content: center;
        width: 100%;
        height: 3em;
        margin: 1em 0 2em 0;
    }

    .action-title-page h2 {
        font-size: 2em;
    }

    .article-tabela {
        width: 80%;
        margin: auto;
        box-sizing: border-box;
    }

    .rodape {
        display: flex;
        justify-content: center;
        margin-top: 2em;
    }

</style>

@section('content')

<article class="action-title-page">
    <h2>DETALHES DO CARRO</h3>
</article>
<article class="article-tabela">
    <table class="table">
        <thead>
            <tr>
            <th style="width: 20%">Marca</th>
                <th style="width: 20%">Modelo</th>
                <th style="width: 10%">Ano</th>
                <th style="width: 20%">Cor</th>
                <th style="width: 30%">Placa</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $carro->marca }}</td>
                <td>{{ $carro->modelo }}</td>
                <td>{{ $carro->ano }}</td>
                <td>{{ $carro->cor }}</td>
                <td>{{ $carro->placa }}</td>
            </tr>
        </tbody>
    </table>
</article>
<article class="rodape">
    <a href="{{ route('carros.index') }}" class="btn btn-secondary">Voltar</a>
</article>
    
    
    
@endsection
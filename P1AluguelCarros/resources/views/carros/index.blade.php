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
    <h2>CARROS</h3>
</article>
<article class="article-tabela">
    <table class="table">
        <thead>
            <tr>
                <th style="width: 20%">Marca</th>
                <th style="width: 20%">Modelo</th>
                <th style="width: 10%">Ano</th>
                <th style="width: 20%">Cor</th>
                <th style="width: 30%">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($carros as $carro)
                <tr>
                    <td>{{ $carro->marca }}</td>
                    <td>{{ $carro->modelo }}</td>
                    <td>{{ $carro->ano }}</td>
                    <td>{{ $carro->cor }}</td>
                    <td>
                        <a href="{{ route('carros.show', $carro->id) }}" class="btn btn-info">Detalhes</a>
                        <a href="{{ route('carros.edit', $carro->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('carros.destroy', $carro->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</article>
<article class="rodape">
    <a href="{{ route('carros.create') }}" class="btn btn-primary mb-3">Novo carro</a>
</article>
    
@endsection
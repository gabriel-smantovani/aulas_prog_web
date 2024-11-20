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
    @auth
        <article class="action-title-page">
            <h2>CONTRATOS</h3>
        </article>
        <article class="article-tabela">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 10%">ID</th>
                        <th style="width: 20%">Modelo</th>
                        <th style="width: 20%">Contratante</th>
                        <th style="width: 20%">Tipo de contrato</th>
                        <th style="width: 20%">Valor total</th>
                        <th style="width: 10%">Ações</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($contratos as $contrato)
                    <tr>
                        <td>{{ $contrato->id }}</td>
                        <td>{{ $contrato->carro->modelo ?? 'Carro não encontrado' }}</td>
                        <td>{{ $contrato->user->name ?? 'Usuário não encontrado' }}</td>
                        <td>{{ $contrato->tipo_contrato }}</td>
                        <td>{{ $contrato->calcularValorTotal() }}</td>
                        <td>
                            <form action="{{ route('contratos.destroy', $contrato->id) }}" method="POST" style="display:inline;">
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
    @endauth
@endsection
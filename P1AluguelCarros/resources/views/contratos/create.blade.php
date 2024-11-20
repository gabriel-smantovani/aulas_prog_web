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

    .formularios {
        width: 50%;
        height: auto;
        margin: auto;
    }

    .botoes-formulario {
        display: flex;
        justify-content: space-evenly;
    }

</style>

@section('content')
    @auth
        <div class="container">
            <article class="action-title-page">
                <h2>FINALIZE SEU CONTRATO</h3>
            </article>

            <form action="{{ route('contratos.store') }}" method="POST" class="formularios">
                @csrf
                <input type="hidden" name="carro_id" value="{{ $carro->id }}">
                <input type="hidden" name="user_id" value="{{ $user->id }}">
                <div class="form-group">
                    <label for="tipo_contrato">Tipo de contrato</label>
                    <select id="tipo_contrato" name="tipo_contrato" class="form-control" required>
                        <option value="Diario">Diário</option>
                        <option value="Semanal">Semanal</option>
                        <option value="Mensal">Mensal</option>
                        <option value="Anual">Anual</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="valor">Valor/dia</label>
                    <input type="text" id="valor" name="valor" class="form-control" value="{{ $carro->valor }}" readOnly>
                </div>
                <div class="botoes-formulario">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <a href="{{ route('carros.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    @endauth
@endsection
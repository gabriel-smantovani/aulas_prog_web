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
                <h2>CADASTRE O CARRO</h3>
            </article>

            <form action="{{ route('carros.store') }}" method="POST" class="formularios">
                @csrf
                <div class="form-group">
                    <label for="placa">Placa</label>
                    <input type="text" id="placa" name="placa" class="form-control" minlength="7" maxlength="7" required>
                </div>
                <div class="form-group">
                    <label for="marca">Marca</label>
                    <input type="text" id="marca" name="marca" class="form-control" minlength="3" maxlength="30" required>
                </div>
                <div class="form-group">
                    <label for="modelo">Modelo</label>
                    <input type="text" id="modelo" name="modelo" class="form-control" minlength="3" maxlength="30" required>
                </div>
                <div class="form-group">
                    <label for="ano">Ano</label>
                    <input type="number" id="ano" name="ano" class="form-control" min="1900" max="2025" required>
                </div>
                <div class="form-group">
                    <label for="cor">Cor</label>
                    <input type="text" id="cor" name="cor" class="form-control" minlength="3" maxlength="30" required>
                </div>
                <div class="form-group">
                    <label for="valor">Valor/dia</label>
                    <input type="text" id="valor" name="valor" class="form-control" min=1 required>
                </div>
                <div class="botoes-formulario">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <a href="{{ route('carros.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    @endauth
@endsection
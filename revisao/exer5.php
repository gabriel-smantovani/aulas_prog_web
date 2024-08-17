<?php require("cabecalho.php"); ?>

<h1>Exercício 5</h1>

<form action="exer5.php" method="POST">
    <div class="row">
        <div class="col">
            <label for="dias_trabalhados">Dias trabalhados: </label>
            <input type="number" id="dias_trabalhados"
                                    name="dias_trabalhados" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-success">Calcular</button>
        </div>
    </div>
</form>

<?php

    function calcularFerias($diasTrabalhados) {
        if($diasTrabalhados > 900) {
            return "Os dias trabalhados excede o máximo, o número de dias de férias se limita a 30 dias.";
        }
        return "O tempo de férias é de " .  $diasTrabalhados / 30 . " dias.";
    }

    if($_POST) {
        $diasTrabalhados = $_POST["dias_trabalhados"];

        echo calcularFerias($diasTrabalhados);
    }

    require("rodape.php");
?>
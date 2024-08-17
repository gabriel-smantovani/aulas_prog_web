<?php require("cabecalho.php"); ?>

<h1>Exercício 2</h1>

<form action="exer2.php" method="POST">
    <div class="row">
        <div class="col">
            <label for="horas_trabalhadas">Horas semanais trabalhadas: </label>
            <input type="number" id="horas_trabalhadas"
                                    name="horas_trabalhadas" class="form-control">
        </div>
        <div class="col">
            <label for="valor_hora">Valor da hora: </label>
            <input type="text" id="valor_hora"
                                    name="valor_hora" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-success">Calcular</button>
        </div>
    </div>
</form>

<?php

    function calcularSalario($horas, $valorHora) {
        return ($horas * $valorHora);
    }

    if($_POST) {
        $horas = $_POST["horas_trabalhadas"];
        $valorHora = $_POST["valor_hora"];

        echo calcularSalario($horas, $valorHora);
    }

    require("rodape.php");
?>
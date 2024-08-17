<?php require("cabecalho.php"); ?>

<h1>Exercício 6</h1>

<form action="exer6.php" method="POST">
    <div class="row">
        <div class="col">
            <label for="horas_previstas">Horas previstas: </label>
            <input type="number" id="horas_previstas"
                                    name="horas_previstas" class="form-control">
        </div>
        <div class="col">
            <label for="taxa_hora">Taxa por hora: </label>
            <input type="number" id="taxa_hora"
                                    name="taxa_hora" class="form-control">
        </div>
        <div class="col">
            <label for="custo_adicional">Custo adicional: </label>
            <input type="number" id="custo_adicional"
                                    name="custo_adicional" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-success">Calcular</button>
        </div>
    </div>
</form>

<?php

    function calcularCustoProjeto($horasPrevistas, $taxaHora, $custoAdicional) {
        return "O custo do projeto é de " . $horasPrevistas * $taxaHora + $custoAdicional . " reais.";
    }

    if($_POST) {
        $horasPrevistas = $_POST["horas_previstas"];
        $taxaHora = $_POST["taxa_hora"];
        $custoAdicional = $_POST["custo_adicional"];

        echo calcularCustoProjeto($horasPrevistas, $taxaHora, $custoAdicional);
    }

    require("rodape.php");
?>
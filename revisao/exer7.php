<?php require("cabecalho.php"); ?>

<h1>Exercício 7</h1>

<form action="exer7.php" method="POST">
    <div class="row">
        <div class="col">
            <label for="prazo_inicial">Prazo inicial: </label>
            <input type="number" id="prazo_inicial"
                                    name="prazo_inicial" class="form-control">
        </div>
        <div class="col">
            <label for="dias_finalizados">Qtde. de dias finalizados: </label>
            <input type="number" id="dias_finalizados"
                                    name="dias_finalizados" class="form-control">
        </div>
        <div class="col">
            <label for="total_atividades">Total de atividades: </label>
            <input type="number" id="total_atividades"
                                    name="total_atividades" class="form-control">
        </div>
        <div class="col">
            <label for="qtde_ativ_realizadas">Qtde. de atividades já realizadas: </label>
            <input type="number" id="qtde_ativ_realizadas"
                                    name="qtde_ativ_realizadas" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-success">Calcular</button>
        </div>
    </div>
</form>

<?php

    function calcularDesempenho($prazo, $diasFinalizados, $totalAtividades, $qtdeAtivRealizadas) {
        $qtdeEsperadaDia = $totalAtividades / $prazo;
        $ppAtual = 100 * $qtdeAtivRealizadas / $totalAtividades;
        $ppEsperada = 100 * ($qtdeEsperadaDia * $diasFinalizados) / $totalAtividades;

        return "O progresso do projeto está em " . $ppAtual . "%, restando " . $prazo - $diasFinalizados . " dias para finalizá-lo. Era de se esperar que o progresso estivesse em " . $ppEsperada . "%.";
    }

    if($_POST) {
        $prazo = $_POST["prazo_inicial"];
        $diasFinalizados = $_POST["dias_finalizados"];
        $totalAtividades = $_POST["total_atividades"];
        $qtdeAtivRealizadas = $_POST["qtde_ativ_realizadas"];

        echo calcularDesempenho($prazo, $diasFinalizados, $totalAtividades, $qtdeAtivRealizadas);
    }

    require("rodape.php");
?>
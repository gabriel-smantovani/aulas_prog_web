<?php require("cabecalho.php"); ?>

<h1>Exercício 3</h1>

<form action="exer3.php" method="POST">
    <div class="row">
        <div class="col">
            <label for="lucros">Lucros a serem distribuídos: </label>
            <input type="number" id="lucros"
                                    name="lucros" class="form-control">
        </div>
        <div class="col">
            <label for="nome_funcionario">Nome do funcionário: </label>
            <input type="text" id="nome_funcionario"
                                    name="nome_funcionario" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="escala">Escala: </label>
            <input type="number" id="escala"
                                    name="escala" class="form-control" min="1" max="5">
        </div>
        <div class="col">
            <button type="submit" class="btn btn-success">Calcular</button>
        </div>
    </div>
</form>

<?php

    function calcularLucro($lucros, $nomeFuncionario, $escala) {
        if($escala == 1) {
            $resultado = $lucros * 0.1;
            $resultado = $nomeFuncionario . " receberá R$" . $resultado . " pela escala.";
        }
        else if($escala == 2) {
            $resultado = $lucros * 0.25;
            $resultado = $nomeFuncionario . " receberá R$" . $resultado . " pela escala.";
        }
        else if($escala == 3) {
            $resultado = $lucros * 0.4;
            $resultado = $nomeFuncionario . " receberá R$" . $resultado . " pela escala.";
        }
        else if($escala == 4) {
            $resultado = $lucros * 0.55;
            $resultado = $nomeFuncionario . " receberá R$" . $resultado . " pela escala.";
        }
        else if($escala == 5) {
            $resultado = $lucros * 0.7;
            $resultado = $nomeFuncionario . " receberá R$" . $resultado . " pela escala.";
        }
        else {
            $resultado = "Escala inválida!";
        }
        return $resultado;
    }

    if($_POST) {
        $lucros = $_POST["lucros"];
        $nomeFuncionario = $_POST["nome_funcionario"];
        $escala = $_POST["escala"];

        echo calcularLucro($lucros, $nomeFuncionario, $escala);
    }

    require("rodape.php");
?>
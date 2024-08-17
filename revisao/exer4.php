<?php require("cabecalho.php"); ?>

<h1>Exercício 4</h1>

<form action="exer4.php" method="POST">
    <div class="row">
        <div class="col">
            <label for="nome_tarefa">Nome da tarefa: </label>
            <input type="text" id="nome_tarefa"
                                    name="nome_tarefa" class="form-control">
        </div>
        <div class="col">
            <label for="total_horas_tarefa">Total de horas da tarefa: </label>
            <input type="number" id="total_horas_tarefa"
                                    name="total_horas_tarefa" class="form-control" min="0">
        </div>
        <div class="col">
            <label for="complexidade_tarefa">Complexidade da tarefa: </label>
            <select name="complexidade_tarefa" id="complexidade_tarefa">
                <option value="alta">Alta</option>
                <option value="media">Média</option>
                <option value="baixa">Baixa</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="nome_funcionario">Nome do funcionário: </label>
            <input type="text" id="nome_funcionario"
                                    name="nome_funcionario" class="form-control">
        </div>
        <div class="col">
            <label for="horas_disponiveis">Total de horas disponíveis: </label>
            <input type="number" id="horas_disponiveis"
                                    name="horas_disponiveis" class="form-control" min="0">
        </div>
        <div class="col">
            <label for="nivel_experiencia">Nível de experiência: </label>
            <select name="nivel_experiencia" id="nivel_experiencia">
                <option value="senior">Sênior</option>
                <option value="pleno">Pleno</option>
                <option value="junior">Júnior</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-success">Calcular</button>
        </div>
    </div>
</form>

<?php

    function assumirTarefa($nomeTarefa, $totalHorasTarefa, $complexidadeTarefa, $nomeFuncionario, $horasDisponiveis, $nivelExperiencia) {
        if($horasDisponiveis - 0.1 * $horasDisponiveis >= $totalHorasTarefa) {
            
            if($nivelExperiencia == "junior" && $complexidadeTarefa == 'baixa') {
                return "O funcionário " . $nomeFuncionario . " assumiu a tarefa " . $nomeTarefa;
            }
            else if($nivelExperiencia =="junior" && $complexidadeTarefa == 'media' || $nivelExperiencia =="junior" && $complexidadeTarefa == 'alta') {
                return "O funcionário " . $nomeFuncionario . " não pode assumir a tarefa " . $nomeTarefa . ", pois seu nível não corresponde à complexidade da tarefa.";
            }

            if($nivelExperiencia == "pleno" && $complexidadeTarefa == 'baixa' || $nivelExperiencia == "pleno" && $complexidadeTarefa == 'media') {
                return "O funcionário " . $nomeFuncionario . " assumiu a tarefa " . $nomeTarefa;
            }
            else if($nivelExperiencia =="pleno" && $complexidadeTarefa == 'alta') {
                return "O funcionário " . $nomeFuncionario . " não pode assumir a tarefa " . $nomeTarefa . ", pois seu nível não corresponde à complexidade da tarefa.";
            }

            if($nivelExperiencia == "senior" && $complexidadeTarefa == 'media' || $nivelExperiencia == "senior" && $complexidadeTarefa == 'alta') {
                return "O funcionário " . $nomeFuncionario . " assumiu a tarefa " . $nomeTarefa;
            }
            else if($nivelExperiencia =="senior" && $complexidadeTarefa == 'baixa') {
                return "O funcionário " . $nomeFuncionario . " não pode assumir a tarefa " . $nomeTarefa . ", pois seu nível não corresponde à complexidade da tarefa.";
            }
        }
        else {
            return "A tarefa " . $nomeTarefa . " não pode ser assumida, pois o tempo disponível de " . $nomeFuncionario . " é menor que o necessário.";
        }
    }

    if($_POST) {
        $nomeTarefa = $_POST["nome_tarefa"];
        $totalHorasTarefa = $_POST["total_horas_tarefa"];
        $complexidadeTarefa = $_POST["complexidade_tarefa"];

        $nomeFuncionario = $_POST["nome_funcionario"];
        $horasDisponiveis = $_POST["horas_disponiveis"];
        $nivelExperiencia = $_POST["nivel_experiencia"];

        echo assumirTarefa($nomeTarefa, $totalHorasTarefa, $complexidadeTarefa, $nomeFuncionario, $horasDisponiveis, $nivelExperiencia);
    }

    require("rodape.php");
?>
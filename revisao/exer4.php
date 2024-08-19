<?php require("cabecalho.php");?>

<h1>Exercício 4</h1>
<form action="exer4.php" method="POST">
<div class="row">
    <div class="col">
        <label for="nome_tar"> Nome da tarefa</label>
        <input type="text" id="nome_tar"
            name="nome_tar" class="form-control">
            <br><br>
    </div>
    <div class="col">
        <label for="horas_tar" class="form-label"> Informe o total de horas da tarefa: </label>
        <input type="text" id="horas_tar"
            name="horas_tar" class="form-control">
    </div>
    <div> 
        <label for="complexidade">Selecione a complexidade:</label>
        <select name="complexidade" id="complexidade">
            <option value="alta">Alta</option>
            <option value="media">Média</option>
            <option value="baixa">Baixa</option>
        </select>
        <br><br>   
    </div>
    <div class="col">
        <label for="nome_func" class="form-label"> Nome funcionário: </label>
        <input type="text" id="nome_func"
            name="nome_func" class="form-control">
    </div>
    <div class="col">
        <label for="horas_disp" class="form-label"> Horas disponíveis para o trabalho: </label>
        <input type="text" id="horas_disp"
            name="horas_disp" class="form-control">
    </div>
    <div> 
        <label for="experiencia">Nível de experiência:</label>
        <select name="experiencia" id="experiencia">
            <option value="junior">Júnior</option>
            <option value="pleno">Pleno</option>
            <option value="senior">Sênior</option>
        </select>
        <br><br>   
    </div>
</div>
<div class="row">
    <div class="col">
        <button type="submit" class="btn btn-success">Verificar capacidade técnica</button>
    </div>
</div>
</form>

<?php
require( "funcao.php"); 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_tarefa = $_POST['nome_tar'];
    $horas_tarefa = $_POST['horas_tar'];
    $complexidade = $_POST['complexidade'];
    $nome_funcionario = $_POST['nome_func'];
    $horas_disponiveis = $_POST['horas_disp'];
    $nivel_experiencia = $_POST['experiencia'];
    $mensagem = verificar($nome_funcionario, $horas_disponiveis, $nivel_experiencia, $nome_tarefa, $horas_tarefa, $complexidade);

    echo "<p>$mensagem</p>";
}
  require("rodape.php"); ?>
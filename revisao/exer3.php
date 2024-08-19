<?php require("cabecalho.php");?>

<h1>Exercício 3</h1>
<form action="exer3.php" method="POST">
<div class="row">
    <div class="col">
        <label for="lucro_emp"> Lucro da empresa</label>
        <input type="number" id="lucro_emp"
            name="lucro_emp" class="form-control">
    </div>
    <div class="col">
        <label for="nome_func" class="form-label"> Informe o nome do funcionário: </label>
        <input type="text" id="nome_func"
            name="nome_func" class="form-control">
    </div>
    <div class="col">
        <label for="nota_desemp" class="form-label"> Informe a nota de 1 a 5 de desempenho do funcionário (1-pouco desempenho, 5-excelente desempenho): </label>
        <input type="number" id="nota_desemp"
            name="nota_desemp" class="form-control">
    </div>
</div>
<div class="row">
    <div class="col">
        <button type="submit" class="btn btn-danger">Calcular o lucro recebido pelo funcionário</button>
    </div>
</div>
</form>

<?php
require( "funcao.php"); 
 if($_POST){
    $lucro_emp = $_POST['lucro_emp'];
    $nome_func = $_POST['nome_func'];
    $nota_desemp = $_POST['nota_desemp'];
    calcular_lucro($lucro_emp, $nome_func, $nota_desemp);
}
  
  require("rodape.php"); ?>
<?php require("cabecalho.php");?>

<h1>Exercício 1 - Horas trabalhadas no dia</h1>
<form action="exer1.php" method="POST">
<div class="row">
    <div class="col-6">
        <label for="hora_entrada"> Hora da entrada</label>
        <input type="time" id="hora_entrada"
            name="hora_entrada" class="form-control">
            <br>
    </div>
</div>
<div class="row">
    <div class="col-6">
        <label for="hora_saida" class="form-label"> Informe a Hora da saída: </label>
        <input type="time" id="hora_saida"
            name="hora_saida" class="form-control">
            <br>
    </div>
</div>
<div class="row">
    <div class="col-6">
        <button type="submit" class="btn btn-danger">Calcular</button>
        <br>
    </div>
</div>
</form>

<?php
require( "funcao.php"); 
 if($_POST){
    $hora_entrada = new DateTime($_POST['hora_entrada']);
    $hora_saida = new DateTime($_POST['hora_saida']);
    calcular_hora($hora_entrada, $hora_saida);
}
  
  require("rodape.php"); ?>
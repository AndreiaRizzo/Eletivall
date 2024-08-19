<?php
    function calcular_hora($hora_entrada, $hora_saida)
    {    
        $diferenca = $hora_saida->diff($hora_entrada);
        echo "Diferença de horário: ".$diferenca->format("%h:%I");
    }

    function valor_semanal($horas_mensal, $valor_hora)
    {
        $semanal = ($horas_mensal * $valor_hora)/4.5;
        echo "O valor semanal recebido é de: ".number_format($semanal,2,",",".");
    }
    
    function calcular_lucro($lucro_emp, $nome_func, $nota_desemp)
    {
        $lucro_func = ($lucro_emp * $nota_desemp / 100);
        echo " O valor de lucro anual recebido pelo $nome_func é de: " .number_format($lucro_func,2,",",".");
    }

    function verificar($nome_funcionario, $horas_disponiveis, $nivel_experiencia, $nome_tarefa, $horas_tarefa, $complexidade) {
        $horas_necessarias = $horas_tarefa * 1.1;
    
        if ($horas_disponiveis < $horas_necessarias) {
            return "O funcionário $nome_funcionario não tem horas disponíveis suficientes para realizar a tarefa $nome_tarefa.";
        }
    
        if (
            ($nivel_experiencia == "junior" && $complexidade != "baixa") ||
            ($nivel_experiencia == "pleno" && $complexidade == "alta")
        ) {
            return "O funcionário $nome_funcionario não possui nível de experiência suficiente para realizar a tarefa de complexidade $complexidade.";
        }
    
        return "O funcionário $nome_funcionario pode realizar a tarefa $nome_tarefa.";
    }
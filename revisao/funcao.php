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
    
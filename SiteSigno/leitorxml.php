<?php
use parallel\Events\Event\Type;
use Componere\Value;

    $xml = simplexml_load_file('signos.xml');

    $v_dataNascimento = new DateTime($_GET["f_data"]);
    $v_data = $v_dataNascimento->format('m-d');
    $v_month = $v_dataNascimento->format('m');
    $v_day = $v_dataNascimento->format('d');
    
    if($v_month == "12" and $v_day>="22" or $v_month == "01"and $v_day<="20"){
        foreach($xml->signo as $registro):
            if($registro->signoNome == "Capricórnio"){
                echo 'Signo: ' . $registro->signoNome . '<br>';
                echo 'Descrição: ' . $registro->descricao . '<br>';
            }
        endforeach;

    } 
    foreach($xml->signo as $registro):

        $v_dataInicio = $registro->dataInicio;
        $v_dataFim = $registro->dataFim;

        if($v_dataInicio<= $v_data && $v_data <= $v_dataFim){
            echo 'Signo: ' . $registro->signoNome . '<br>';
            echo 'Descrição: ' . $registro->descricao . '<br>';
        }
            
    endforeach;
?>
<?php
    $n1 = isset ($_GET[ "nota01"])? $_GET["nota01"]:0;
    $n2 =  isset ($_GET["nota02"])? $_GET["nota02"]:0;
    echo "Suas Notas São:<br> Nota 01: $n1 <br>Nota 02: $n2.<br>";
    $media = ($n1+$n2)/2;
    if ($media >=7){
        $s = "Aprovado";
    }
        else {
            $s = "Reprovado";
        }
    echo "Sua Média é: $media e sua situação é <strong>$s</strong>";
    
?>
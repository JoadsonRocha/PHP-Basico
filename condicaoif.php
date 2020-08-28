<?php
    $ano = isset ($_GET["tano"])?$_GET["tano"]:1990;
    $idade = date("Y") - $ano;
    echo "<strong>Você Nasceu em $ano e terá: $idade Anos</strong><br>";
    if($idade >= 18 && $idade <65) {
        $voto = "Já pode Votar";
        $dirigir = "Já pode Dirigir";
    }
    elseif (($idade >= 16 && $idade <18) || ($idade > 65))  {
            $voto = "Seu é Voto Opcional";   
            $dirigir = "Não pode dirigir" ;       
        }
   
        else {
            $voto = "Não pode Votar";
            $dirigir = "Não pode dirigir" ;
        }
  
    echo "Com essa idade: $voto  e também  $dirigir";
?>
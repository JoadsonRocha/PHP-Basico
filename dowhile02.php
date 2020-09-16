<?php
    $v = isset($_GET["val"])?$_GET["val"]:1;
    echo "<h1>Calculando Fatorial de $v </h1>"
    $c = $v;
    $fat = 1;
    do {
        $fat = $fat * $c;
        $c --;
    } while ($c >= 1);
    echo "<h2 $v != $fat</h2>"
    echo "<a href="do while02.html">Voltar</a>"
?>
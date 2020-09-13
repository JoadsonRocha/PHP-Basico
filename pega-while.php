<?php
    $i = 1;
    while ($i <=5){
        $v = "num".$i;
        $ur = "a".$i;
        $$v = isset($_GET[$ur])?$_get[$ur]:0;
        $i++;
    }
    echo "$num1, $num2, $num3, $num4, $num5 ";




?>
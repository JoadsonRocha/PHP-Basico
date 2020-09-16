<?php
    $i = 1;
    while ($i <= 5){
        $v = "num".$i;
        $url = "a".$i;
        $$v = isset($_GET[$url])?$_GET[$url]:0;
        $i++;
    }
  
echo $num1, $num2;

?>
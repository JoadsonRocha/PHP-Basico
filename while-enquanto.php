<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While - Enquando 01</title>
</head>
<body>
<style>
    	body {
    		background-color: #dedede;
    	}
    	h2 {
    		text-align: center;
    	}
		div#centro { 
			background-color: white;
			height: 500px;
			width: 500px;
			margin: 0 auto;
			padding: 20px;
			font-family: Arial;
			font-size:14pt;
			border-radius: 20px;		
		}
</style>	
<div id="centro">
        <?php
            $c = 1;
            while ($c <= 10){
            echo $c. "</br>";
			//$c ++;
			$c += 2; //Pula de 2 em dois;
            }

        ?>
</div>
</body>
</html>
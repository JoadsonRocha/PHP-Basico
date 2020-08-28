<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 03</title>
</head>
<body>
    <?php
        $r = isset($_GET["estado"])?$_GET["estado"]:0;
        switch ($r) {
            case 1:
                echo "Voçê Mora Na Região Norte!";
            break;
            case 2:
                echo "Voçê Mora Na Região Nordeste!";
            break;
            case 3:
                echo "Voçê Mora Na Região Centro-Oeste!";
            break;
            case 4:
                echo "Voçê Mora Na Região Sudeste!";
            break;
            case 5:
                echo "Voçê Mora Na Região Sul!";           
                
        }
    ?>
    
</body>
</html>
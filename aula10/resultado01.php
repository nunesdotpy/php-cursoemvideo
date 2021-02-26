<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title></title>
</head>
<body>
<div>
    <?php
        $num = $_GET["nu1"];
        $o = $_GET["op"];

        switch ($o){
            case 1:
                if ($o=="dobro"){
                    $num *= 2;
                    echo "O dobro de ". $_GET["nu1"] ." é $num";
                }
                break;

            case 2:
                if ($o=="cubo"){
                    $num *= $num;
                    echo "O cubo de ". $_GET["nu1"] ." é $num";
                }
                break;
            
            case 3:
                if ($o=="raiz"){
                    $num = sqrt($num);
                    echo "A raiz de ". $_GET["nu1"] ." é $num";
                }
            break;

            default:
                echo "Erro";
        }
    ?>
</div>
</body>
</html>
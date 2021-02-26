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
        $ano = $_GET["ano"];
        $idade = date("Y") - $ano;
        $v = "";
        $d = "";

        if ($idade<16){
            $v = "não vota";
            $d = "não dirige";

        }elseif ($idade>16 && $idade<18){
                $v = "vota";
                $d = "não dirige";
            }else{
                    $v = "vota";
                    $d = "dirige";
                }
        echo "Você nasceu em $ano e tem $idade anos, portanto $v e $d.";
    ?>
</div>
</body>
</html>
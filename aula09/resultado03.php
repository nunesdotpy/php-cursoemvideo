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
        $n1 = $_GET["nu1"];
        $n2 = $_GET["nu2"];
        $m = ($n1 + $n2)/2;
        $s = "REPROVADO";
        echo "Suas notas são: $n1 e $n2 e sua média é igual a $m<br>";
        if ($m>7){
            $s = "APROVADO";
        }elseif ($m>=5 && $m<=7){
            $s = "RECUPERAÇÃO";
        }else{}
        echo "Situação do aluno: $s";
        
    ?>
</div>
</body>
</html>
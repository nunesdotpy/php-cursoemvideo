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
        $num = $_GET['num'];
        $p = 1;
        
        if($num==1){
            echo "Resultado: $num É PRIMO!";
        }else{
            for ($c=2;$p>0;$c++) {
                $p = $num % $c;
            }
            $c--;
            if ($c==$num){
                echo "Resultado: $num É PRIMO";
            }else{
                echo "Resultado: $num NÃO É PRIMO";
            }
        }
    ?><br>
    <a href="exercicio03.html">Voltar</a>
</div>
</body>
</html>
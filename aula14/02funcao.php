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
        function soma ($a, $b){
            return $a+$b;
        }
            
        $x = 3;
        $y = 4;
        $r = soma($x,$y);
        echo "A soma entre $x e $y é igual a $r";
    ?>
</div>
</body>
</html>
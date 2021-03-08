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
    $c = 1;
    
    while($c<=5){
        $v = $_GET["v$c"];
        echo "Valor $c: $v<br>";
        $c++;
    }
    ?>
</div>
</body>
</html>
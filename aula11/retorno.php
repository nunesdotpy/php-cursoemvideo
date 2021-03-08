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
    $ini = $_GET['ini'];
    $fim = $_GET['fim'];
    $inc = $_GET['inc'];

    if($ini<=$fim){
        while ($ini<=$fim) {
            echo "$ini ";
            $ini += $inc;
        }
    }else{
        while($fim<=$ini){
            echo "$ini ";
            $ini -= $inc;
        }
    }

    ?>
</div>
</body>
</html>
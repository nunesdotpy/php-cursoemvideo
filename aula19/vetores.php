<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title></title>
</head>
<body>
<div>
    <pre>
    <?php
        $n = array(0=>3,1=>5,2=>8,3=>2);
        print_r($n);
        var_dump($n);
        echo count($n);
        echo "<br>";
        foreach($n as $valor){
            echo "$valor ";
        }
    ?>
    </pre>
</div>
</body>
</html>
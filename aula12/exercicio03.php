<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title></title>
</head>
<body>
<div>
    <h3>Tabuada generator</h3>
    <?php
        $num = $_GET['num'];
        $c = 1;

        do{
            $num *= $c;
            echo $_GET['num']." x $c = $num<br>";
            $c++;
            $num = $_GET['num'];
        }while($c<=10);
    ?>
    <a href="exercicio03.html">Voltar</a>
</div>
</body>
</html>
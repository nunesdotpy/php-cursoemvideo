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
        $ano = $_GET["an"];
        $idade = 2021 - $ano;
        echo "Quem nasceu em $ano tem idade de $idade anos.";
        $tipo = ($idade>=18 && $idade<=65)?"OBRIGATÓRIO":"NAO OBRIGATÓRIO";
        echo "<br>Seu voto é: $tipo";
    ?>
</div>
</body>
</html>
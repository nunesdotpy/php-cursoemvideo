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
        $frase = "Estou aprendendo PHP";
        $pos = stripos($frase, "php");
        echo $pos;
    ?>
</div>
</body>
</html>
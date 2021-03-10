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
        $cont = substr_count($frase, "PHP");
        echo $cont;
    ?>
</div>
</body>
</html>
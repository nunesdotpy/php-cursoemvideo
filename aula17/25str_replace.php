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
        $frase = "Gosto de estudar Matemática!";
        $novaFrase = str_ireplace("Matemática","PHP",$frase);
        echo $novaFrase;
    ?>
</div>
</body>
</html>
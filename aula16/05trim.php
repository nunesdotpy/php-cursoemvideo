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
        $nome = "   José da Silva   ";
        echo($nome."<br>");
        echo(strlen($nome));
        $novo = trim($nome);
        echo("<br>".$novo."<br>");
        echo(strlen($novo));
    ?>
</div>
</body>
</html>
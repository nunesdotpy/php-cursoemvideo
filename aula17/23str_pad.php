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
        $nome = "Guanabara";
        $novo = str_pad($nome, 30," ",STR_PAD_RIGHT);
        echo "Meu professor $novo é lindo";
    ?>
</div>
</body>
</html>
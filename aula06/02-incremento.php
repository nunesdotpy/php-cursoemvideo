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
        $atual = $_GET["aa"]; // Essa linha vai pegar o ano na URL
        echo "O ano atual é: $atual e o ano anterior é ". --$atual;
    ?>
</div>
</body>
</html>
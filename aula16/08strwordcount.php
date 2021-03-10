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
        $frase = "Eu vou estudar PHP agora";
        $count = str_word_count($frase, 2);
        print_r($count);
    ?>
</div>
</body>
</html>
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
        $x = "abc";
        $$x = "def";
        echo "O conteúdo da variável X é $x";
        echo "<br>A variavel $x criada recebeu o valor $abc";
    ?>
</div>   
</body>
</html>
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
        $v = $_GET['val'];
        $r = $v;

        do{
            $r *= ($v-1);
            $v--;
        }
        while($v>1);
        echo "O valor fatorial de ". $_GET['val'] ." é $r";
    ?><br>
    <a href="form.html" class="botao">Voltar</a>
</div>
</body>
</html>
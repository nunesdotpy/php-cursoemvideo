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
        $a = 3;
        $b = $a;
        $b += 5;
        echo "$a e $b";

        $a = 3;
        $b = &$a;
        $b += 5;
        echo "<br>$a e $b";
    ?>
</div>   
</body>
</html>
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
        function teste (&$x){
            $x += 2;
            echo $x;
        }

        $a = 3;
        teste($a);
        echo "<br>$a";
    ?>
</div>
</body>
</html>
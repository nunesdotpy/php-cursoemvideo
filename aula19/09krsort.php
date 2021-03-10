<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title></title>
</head>
<body>
<div>
    <pre>
    <?php
        $v = array(2=>3,3=>5,4=>8,0=>2);
        print_r($v);
        krsort($v);
        print_r($v);
    ?>
    </pre>
</div>
</body>
</html>
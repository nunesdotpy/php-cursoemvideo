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
        $v = array(0=>3,1=>5,2=>8,3=>2);
        print_r($v);
        array_unshift($v,"O");
        print_r($v);
        array_shift($v);
        print_r($v)
    ?>
    </pre>
</div>
</body>
</html>
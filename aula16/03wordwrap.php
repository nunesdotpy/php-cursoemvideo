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
        $txt = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime aut dicta natus rerum aliquam delectus magni illum repudiandae, ipsam, aspernatur ex quis saepe qui deserunt voluptas? Debitis eum ducimus fugiat?";
        $res = wordwrap($txt,20,"<br>\n", false);
        echo($res);
    ?>
</div>
</body>
</html>
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
        $vetor[0] = "Curso";
        $vetor[1] = "em";
        $vetor[2] = "Vídeo";
        $txt = implode(" ", $vetor); // pode usar a func join()
        echo $txt;
    ?>
</div>
</body>
</html>
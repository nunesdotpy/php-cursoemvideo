<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title></title>
</head>
<body>
<div>
    <form method="get" action="01exercicio.php">
        <input type="text" name="v">
        <input type="submit" value="Enviar">
    </form>
    <?php
        $valor = $_GET["v"];
        echo "<br>A raiz quadrada de $valor é: ". sqrt($valor);
    ?>
</div>
</body>
</html>
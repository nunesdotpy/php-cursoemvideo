<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title></title>
</head>
<body>
<div>
    <form method="get" action="02idade.php">
        Nome: <input type="text" name="nome"><br>
        Ano de Nascimento: <input type="number" name="ano"><br>
        <fieldset><legend>Sexo</legend>
            <input type="radio" name="sexo" id="masc" value="masculino" checked>
            <label for="masc">Masculino</label><br>
            <input type="radio" name="sexo" id="fem" value="feminino">
            <label for="fem">Feminino</label><br>     
        </fieldset><br>
        <input type="submit" value="Enviar">
    </form>

    <?php



    ?>
</div>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title></title>
</head>
<body>
<div>
    <form method="get" action="03cores.php">
        <label for="itxt">Texto:</label>
        <input type="text" name="t" id="itxt"><br>
        <label for="itam">Tamanho</label>
        <select name="tam" id="itam">
            <option value="8pt">8</option>
            <option value="10pt">10</option>
            <option value="14pt">14</option>
            <option value="20pt">29</option>
            <option value="40pt">40</option>
        </select><br>
        <label for="icor">Cor: </label>
        <input type="color" name="cor" id="icor"><br>
        <input type="submit" value="Gerar">
    </form>
</div>
</body>
</html>
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
    <table border='1'><tr>
    <?php
        $c = range(5,20,2);
        print_r($c);
        foreach($c as $valor){
            echo "<td>$valor ";
        }
    ?>
    </tr>
    </table>
    </pre>
</div>
</body>
</html>
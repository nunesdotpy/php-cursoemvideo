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
        $cad = array( "nome" => "Ana",
                    "idade" => 23,
                    "peso" => 65.5);
        $cad["fuma"] = true;
        foreach($cad as $k => $c){
            echo "O campo $k possui o conteudo $c<br>";
        }
    ?>
    </pre>
</div>
</body>
</html>
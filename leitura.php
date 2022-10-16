<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Descubra seu signo</title>
</head>
<body>
    <?php
    $link = "D:\Documents\Estudo\faculdade\4 semestre\Programação Web\signo.xml";
    //link do arquivo xml
    $xml = simplexml_load_file($link) or die ("ERRO, XML não encontrado");
    
    $dt = isset($_GET["data"])?$_GET["data"]:01/01;

    foreach ($xml->children() as $sig) {
        if ($dt >= $sig->dataInicio and $dt <= $sig->dataFim){
            echo $sig->signoNome;
        }
    }
    ?>
</body>
</html>
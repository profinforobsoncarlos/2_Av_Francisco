<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converter Dólar</title>
</head>
<body>

    <div>
    <?php

    $nome = $_GET["nome"];
    $anonasc = $_GET["ano"];
    $anoatu = date("Y");
    $idade = $anoatu - $anonasc;

    
    if ($idade >= 1 && $idade <= 11) {
        $cat = "Criança";
    }
    elseif ($idade >= 12 && $idade <= 14) {
        $cat = "Adolescente";
    } 
    elseif ($idade >= 15 && $idade <= 18) {
        $cat = "Jovem";
    } 
    elseif ($idade >= 19 && $idade <= 64) {
        $cat = "Adulto";
    } 
    else {
        $categoria = "Idoso";
    }

    echo "<h3>Olá, $nome!</br> Sua idade é $idade anos.</br> Você é um(a) $cat.<h3>";

?>
</br>
    <a href="nome_idade.html"><button><span>Voltar</span></button></a> 

</div>
</body>
</html>
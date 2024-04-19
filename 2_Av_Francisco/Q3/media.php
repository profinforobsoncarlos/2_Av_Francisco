<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média</title>
  
</head>
<body>
    <div>
    <?php
        $nome = $_GET["nome"];
           
        echo "<h2>Nome: $nome.</h2>";

        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $nota3 = $_GET["n3"];
        $nota4 = $_GET["n4"];

        $soma = ($nota1 + $nota2 + $nota3 + $nota4);
        $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

        echo "<h2> A Soma das é igual á: $soma.</h2>";

        if ($media >= 7) {
            echo "<h2>Aprovado! Média: $media</h2>";
        } elseif ($media >= 5 && $media <= 6) {
            echo "<h2>Recuperação! Média: $media</h2>";
        } else {
            echo "<h2>Reprovado! Média: $media</h2>";
        }
    
    ?>
        </br> 
        <br/>
        <a href="media.html"><button>Voltar</button></a>
    </div>
    
</body>
</html>

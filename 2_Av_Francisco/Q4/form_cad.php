<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <style>
        span{
            font: 13pt Arial Black;
        }
    </style>
</head>
<body>
    <div>
        <?php
        $nome = $_GET["nome"];
        $ano_nasc = $_GET["data"];
        $prof = $_GET["prof"];
    
        $ano = date("Y", strtotime($ano_nasc));
        $idade = date('Y') - $ano;

        echo "<span>Seu Nome: $nome. </span></br>";
        echo "<span>Sua idade: $idade anos.</span></br>";
        echo "<span>Sua Profissão: $prof.</span>";  
        
        ?>    
        
        <br/>
        <a href="form_cad.html"><button>Voltar</button></a>
    </div>
    
</body>
</html>

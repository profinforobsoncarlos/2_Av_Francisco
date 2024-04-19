<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converter Dólar</title>
    <Style>
        h3{
            font-size: 15pt;
        }
    </Style>
</head>
<body>

    <div>
        <?php
            $val = $_GET["valor"];
            $conver = ($val / 5.20);
           
            
        echo " <h3>Você informou: R$".number_format($val, 2, ",", ".")."</h3>";
        echo "<h3>Valor convertido: US$ " . number_format($conver, 2, ",", ".") . "<h3>";
    
    ?>
    <a href="conver_dolar.html"><button><span>Voltar</span></button></a> 

</div>
</body>
</html>
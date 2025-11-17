<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Conversor de Moedas </h1>
        <?php
       $cotacao = 5;

        $real = $_REQUEST["din"] ?? 0;

        $dolar = $real / $cotacao;      
        $padrao = number_format($real, 2, ",", ".");  

            // Exiba o resultado
            echo "<p>Seus R$" . number_format($real, 2, ",", ".") . " equivalem a <strong>"  . number_format($dolar, 2, ",", ".") . " dólares</strong></p>";

        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>

</html>
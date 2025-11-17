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
            $cotacoes = array('USD' => 4.94, 'EURO' => 5.37, 'LIBRA' => 6.17);

            $moedaSelecionada = $_GET["moeda"] ?? 0;
            $real = $_GET["din"] ?? 0;

            // Verifique se a resposta foi bem-sucedida
            if (isset($cotacoes[$moedaSelecionada])) {

                // Obtenha as cotações das moedas desejadas
                $cotacaoSelecionada = $cotacoes[$moedaSelecionada];
                $valorConvertido = $real / $cotacaoSelecionada ;

                   // Exiba o resultado
            echo "<p>Seus R$" . number_format($real, 2, ",", ".") . " equivalem a <strong>"  . number_format($valorConvertido, 2, ",", ".") . " $moedaSelecionada</strong></p>";
                } else {
                    // Mostra mensagem de erro para moeda não encontrada
                 echo "Moeda não encontrada.";
                }
         ?>
         <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio 1</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <main>
    <h1>Resultado final</h1>
    <p>
      <?php

      // _GET pega o valor de "name" passado pela URL
      $num = $_GET["num"] ?? 0;

      $ant = $num - 1;
      $suc = $num + 1;

      echo "<p>Analisando o número <strong>$num</strong></p>";
      echo "<p>O seu antecessor é <strong>$ant</strong>.</p>";
      echo "<p>O seu sucessor é <strong>$suc</strong>.</p>";



      ?>
    </p>

    <button onclick="history.back()">Voltar</button>
  </main>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <main>Analisador de número real</main>
  <?php
  $num = $_POST['n'] ?? 0;

  echo "<p>Analisando o número <strong>" . number_format($num, 3, ",", ".") . "</strong></p>";

  $int = (int)$num;
  $fra = $num - $int;

  echo "<ul>
        <li>Parte inteira do número é: <strong>" . number_format($int, 0, ",", ".") . "</strong></li>
        <li>Parte fracionária do número é: <strong>" . number_format($fra, 3, ",", ".") . "</strong></li>
       </ul>";
  ?>
  <button onclick="history.back()">Voltar</button>
</body>

</html>
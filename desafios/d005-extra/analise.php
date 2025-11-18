<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
  $n = $_GET['n'];

  echo "<p>Analisando o número <strong>" . $n . "</strong></p>";

  $int = (int)$n;
  $fra = $n - $int;

  echo "<ul>
        <li>Parte inteira do número é: <strong>" . $int . "</strong></li>
        <li>Parte fracionária do número é: <strong>" . $fra . "</strong></li>
       </ul>";
  ?>
</body>
</html>
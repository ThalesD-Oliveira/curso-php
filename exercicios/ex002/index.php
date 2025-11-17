<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
</head>

<body>
  <h1>Olá PHP!</h1>
  <?php 
  date_default_timezone_set("America/Sao_Paulo");
    echo "Hoje é " . date("d/m/Y") . "<br>";
    echo "Hora atual: " . date("H:i:s");
  ?>
</body>

</html>
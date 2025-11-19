<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $dividendo = $_GET['d1'] ?? 0;
    $divisor = $_GET['d2'] ?? 1;
    ?>
    <main>
        <h1>Desafio PHP 6</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="d1">Dividendo 1</label>
            <input type="number" name="d1" id="d1" min="0" value="<?= $dividendo ?>" step="any" required>
            <label for="d2">Divisor</label>
            <input type="number" name="d2" id="d2" min="1" value="<?= $divisor ?>" step="any" required>
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section>
        <h2>Estrutura da Divisão</h2>
        <?php
        $quociente = $dividendo / $divisor;
        $resto = $dividendo % $divisor;
        ?>

        <table>
            <tr>
                <td><?= $dividendo ?></td>
                <td><?= $divisor ?></td>
            </tr>

            <tr>
                <td><?= $quociente ?></td>
                <td><?= $resto ?></td>
            </tr>
        </table>


    </section>
</body>

</html>
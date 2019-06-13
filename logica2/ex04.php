<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <link rel="stylesheet" href="style.css">

        <form>
            <input type="number" name="nota" placeholder="Digite a nota">
            <input type="submit" value="Submit" value="enviar">
        </form>
        <?php

            if (isset($_GET['nota'])) {
                $nota = floor($_GET['nota']);

                if ($nota < 3) {
                    echo "Conceito E";
                } elseif ($nota >= 3 && $nota <= 5) {
                    echo "Conceito D";
                } elseif ($nota >= 6 && $nota <= 7) {
                    echo "Conceito C";
                } elseif ($nota >= 8 && $nota <= 9) {
                    echo "Conceito B";
                } elseif ($nota == 10) {
                    echo "Conceito A";
                }
            } else {
                echo "Digite uma nota acima";
            }
        ?>
    </body>
</html>
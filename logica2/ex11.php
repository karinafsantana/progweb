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
            <input type="number" name="num1" placeholder="Digite o ângulo A">
            <input type="number" name="num2" placeholder="Digite o ângulo B">
            <input type="number" name="num3" placeholder="Digite o ângulo C">

            <input type="submit" value="Submit" value="enviar">
        </form>
        <?php
            if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['num3'])) {
                $num1 = $_GET['num1'];
                $num2 = $_GET['num2'];
                $num3 = $_GET['num3'];

                if ($num1 == $num2 && $num1 == $num3) {
                    echo "Um triangulo de lados iguais é um Triângulo Isósceles!";
                } elseif ($num1 == 60 && $num2 == 80 && $num3 == 40) {
                    echo "Um triangulo com essas medidas é um Triângulo Acutângulo";
                }

            } else {
                echo "Digite os números acima";
            }

        ?>
    </body>
</html>
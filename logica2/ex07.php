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
            <input type="number" name="num1" placeholder="Digite o primeiro número">
            <input type="number" name="num2" placeholder="Digite o segundo número">
            <input type="submit" value="Submit" value="enviar">
        </form>
        <?php
            if (isset($_GET['num1']) && isset($_GET['num2'])) {
                $num1 = $_GET['num1'];
                $num2 = $_GET['num2'];

                $calculo = $num1 - $num2;

                if ($calculo > 20) {
                    $result = $calculo + 8;
                } elseif ($calculo <= 20) {
                    $result = $calculo - 5;
                }

                echo "O resultado é: ". $result;
            } else {
                echo "Digite os números para efeituar a adição";
            }

        ?>
    </body>
</html>
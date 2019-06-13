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
            <input type="number" name="num1" placeholder="Digite um número">
            <input type="submit" value="Submit" value="enviar">
        </form>
        <?php
            if (isset($_GET['num1'])) {
                $num1 = $_GET['num1'];

                if (($num1 % 10) == 0) {
                    $result = "Esse número é divisível por 10!<br>";
                }
                if (($num1 % 5) == 0) {
                    $result = "Esse número é divisível por 5!<br>";
                }
                if (($num1 % 2) == 0 ){
                    $result = "Esse número é divisível por 2!<br>";
                }

                if (!isset($result)) {
                    echo "Esse número não é divisível por 10, 5 ou 2. =(";
                } else {
                    echo $result;
                }

            } else {
                echo "Digite um número";
            }

        ?>
    </body>
</html>
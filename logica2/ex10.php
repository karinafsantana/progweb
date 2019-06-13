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
            <input type="number" name="num3" placeholder="Digite o terceiro número">

            <input type="submit" value="Submit" value="enviar">
        </form>
        <?php
            if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['num3'])) {
                $num1 = $_GET['num1'];
                $num2 = $_GET['num2'];
                $num3 = $_GET['num3'];

                $valores = [$num1, $num2, $num3];

                rsort($valores);

                foreach($valores as $chave => $valor ){
                    echo $valor.'<br>';
                }

            } else {
                echo "Digite os números acima";
            }

        ?>
    </body>
</html>
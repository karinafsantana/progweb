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
            <input type="text" name="funcionario" placeholder="Digite o nome de um funcionário">
            <input type="number" name="salario" placeholder="Digite o salário">
            <input type="submit" value="Submit" value="enviar">
        </form>
        <?php
            if (isset($_GET['salario']) && isset($_GET['funcionario'])) {
                $salario = abs($_GET['salario']);
                $func = $_GET['funcionario'];
                $aumento = '';
                $porcentagem = '';

                if ($salario <= 2500) {
                    if ($salario >= 0 && $salario <= 400) {
                        $porcentagem = 15;
                        $aumento = round(($salario*15)/100);
                    } elseif ($salario >= 401 && $salario <= 700) {
                        $porcentagem = 12;
                        $aumento = round(($salario*$porcentagem)/100);
                    } elseif ($salario >= 701 && $salario <= 1000) {
                        $porcentagem = 10;
                        $aumento = round(($salario*$porcentagem)/100);
                    } elseif ($salario >= 1001 && $salario <= 1800) {
                        $porcentagem =7;
                        $aumento = round(($salario*$porcentagem)/100);
                    } elseif ($salario >= 1801 && $salario <= 2500) {
                        $porcentagem = 4;
                        $aumento = round(($salario*$porcentagem)/100);
                    }

                    echo "O funcionário <span class='orange'>". $func ."</span> teve um aumento de <span class='impar'>". $porcentagem ."</span>%, <br>Seu salário atual é de <span class='par'>". $salario ."</span> reais e o seu novo salário será de <span class='blue'>". ($aumento+$salario) ."</span> reais.";
                } else {
                    echo "ACIMA DE 2500 SEM AUMENTO.";
                }
            } else {
                echo "Digite o nome de um funcionário e um salário acima.";
            }

        ?>
    </body>
</html>
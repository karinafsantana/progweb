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
            <input type="number" name="num1" placeholder="Digite o número de um mês">

            <input type="submit" value="Submit" value="enviar">
        </form>
        <?php
            if (isset($_GET['num1'])) {
                $num1 = floor($_GET['num1']);

                switch ($num1) {
                    case '1':
                        $mes = "Janeiro";
                        break;
                    case '2':
                        $mes = "Fevereiro";
                        break;
                    case '3':
                        $mes = "Março";
                        break;
                    case '4':
                        $mes = "Abril";
                        break;
                    case '5':
                        $mes = "Maio";
                        break;
                    case '6':
                        $mes = "Junho";
                        break;
                    case '7':
                        $mes = "Julho";
                        break;
                    case '8':
                        $mes = "Agosto";
                        break;
                    case '9':
                        $mes = "Setembro";
                        break;
                    case '10':
                        $mes = "Outubro";
                        break;
                    case '11':
                        $mes = "Novembro";
                        break;
                    case '12':
                        $mes = "Dezembro";
                        break;
                }

                if (isset($mes)) {
                    echo "O mês é <span class='orange'>". $mes."</span>";
                } else {
                    echo "Esse mês não existe! (1 - 12)";
                }

            } else {
                echo "Digite um número acima";
            }

        ?>
    </body>
</html>
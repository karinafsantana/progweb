<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <form action="ex03.php" method="get">
            <input type="number" name="salario" placeholder="Digite o valor do salário">
            <input type="number" name="financiamento" placeholder="Digite o valor do financiamento">
            <input type="submit" value="Submit" value="enviar">
        </form>
        <?php
            if (isset($_GET['salario']) && isset($_GET['financiamento'])) {

                $salario = $_GET['salario'];
                $financiamento = $_GET['financiamento'];

                if ($financiamento <= ($salario*5)) {
                    echo "Financiamento <span class='par'>concedido!</span>";
                } else {
                    echo "Financiamento <span class='impar'>negado!</span>";
                }
            } else {
                echo "Digite o salário e o financiamento pretendido.";
            }
        ?>
</body>
</html>
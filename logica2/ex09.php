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
            <input type="number" name="nome" placeholder="Digite um nome">
            <input type="number" name="idade" placeholder="Digite um idade">
            <select name="sexo">
                <option value="f">Femea</option>
                <option value="m">Macho</option>
            </select>
            <input type="submit" value="Submit" value="enviar">
        </form>
        <?php
            if (isset($_GET['nome']) && isset($_GET['idade']) && isset($_GET['sexo'])) {
                $nome = $_GET['nome'];
                $idade = $_GET['idade'];
                $sexo = $_GET['sexo'];

                if ($sexo == 'f' && $idade < 25) {
                    echo "Aceita!";
                } else {
                    echo "Não aceita!";
                }

            } else {
                echo "Digite um número";
            }

        ?>
    </body>
</html>
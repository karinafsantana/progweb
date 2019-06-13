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
            <input type="texto" name="livro" placeholder="Digite o nome do livro">
            <select name="tipo">
                <option value="prof">Professor</option>
                <option value="aluno">Aluno</option>
            </select>

            <input type="submit" value="Submit" value="enviar">
        </form>
        <?php
            if (isset($_GET['livro']) && isset($_GET['tipo'])) {
                $livro = $_GET['livro'];
                $tipo = $_GET['tipo'];

                if ($tipo == "prof") {
                    echo "Olá, você é um <span class='orange'>Professor</span>! Este é o seu recibo, você tem <span class='par'>10</span> dias para devolver o livro <span class='blue'>". $livro."</span>";
                } else {
                    echo "Olá, você é um <span class='orange'>Aluno</span>! Este é o seu recibo, você tem <span class='par'>3</span> dias para devolver o livro <span class='blue'>". $livro."</span>";
                }
            } else {
                echo "Digite um número acima";
            }

        ?>
    </body>
</html>
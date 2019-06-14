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
    <form action="ex02.php" method="get">
    <input type="text" name="numero" placeholder="Informe um número inteiro">
</form>

<?php

if(isset($_GET["numero"])){

    $numero = floor($_GET["numero"]);

    if($numero>=0){
        //Positivo
        if(($numero%2)==0){
            echo "O número ".$numero." é postivo e PAR";
        }else{
            echo "O número ".$numero." é positivo e ÍMPAR";
        }
    }else{
        //Negativos
        echo "Este número NÃO é positivo!";
    }
}else{
    echo "Informe um número no campo acima!";
}

?>
    </body>
</html>
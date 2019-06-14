<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="ex04.php" method="get">
        <input type="text" name="nota" placeholder="Informe a nota">
        <input type="submit" value="Calcular">
    </form>
<?php
    if(isset($_GET["nota"])){

    $nota = $_GET["nota"];

        if($nota<3){
            echo "Sua nota é ".$nota." e seu conceito é E";
        }elseif($nota>=3 and $nota<5){
            echo "Sua nota é ".$nota." e seu conceito é D";
        }elseif($nota>=5 and $nota<7){
            echo "Sua nota é ".$nota." e seu conceito é C";
        }elseif($nota>=7 and $nota<=9){
            echo "Sua nota é ".$nota." e seu conceito é B";
        }else{
            echo "Sua nota é ".$nota." e seu conceito é A. Parabéns!";
        }

    }else{
        echo "Informe uma nota no campo acima!";
    }

?>

</body>
</html>
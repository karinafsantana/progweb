<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="ex06.php" method="get">
        <input type="text" required name="valori" placeholder="Informe I"><br>
        <input type="text" required name="valori" placeholder="Informe A"><br>
        <input type="text" required name="valori" placeholder="Informe B"><br>
        <input type="text" required name="valori" placeholder="Informe C"><br>
    </form>
    <?php
        if(isset($_GET["valori"]) and isset($_GET["valora"]) and isset($_GET["valorb"]) and isset($_GET["valorc"])){
            $vi = $_GET["valori"];
            $va = $_GET["valora"];
            $vb = $_GET["valorb"];
            $vc = $_GET["valorc"];
            
            $maior=$va;
            $menor=$vb;
            $meio =$vc;

                if($vb>$maior){
                    $maior=$vb;
                }else{
                    $menor=$vb;
                }

                if($vc>$maior){
                    $maior=$vc;
                }else{
                    $meio=$maoir;
                    $menor=$vc;
                }elseif{($vc>$menor=){
                    $meio=$vc;
                }else{
                    $meio=$menor;
                    $menor=$vc;
                }
        }
    ?>
</body>
</html>
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
            <input type="number" name="v1" placeholder="Digite o valor de I">
            <input type="number" name="v2" placeholder="Digite o valor de A">
            <input type="number" name="v3" placeholder="Digite o valor de B">
            <input type="number" name="v4" placeholder="Digite o valor de C">
            <input type="submit" value="Submit" value="enviar">
        </form>
        <?php

            if (isset($_GET['v1']) && isset($_GET['v2']) && isset($_GET['v3']) && isset($_GET['v4'])) {
                $v1 = round($_GET['v1']);
                $a = $_GET['v2'];
                $b = $_GET['v3'];
                $c = $_GET['v4'];
                $valores = [$a, $b, $c];
    
                
                if ($v1 == 1) {
                    asort($valores);
    
                    foreach($valores as $chave => $valor ){
                        echo $valor.'<br>';
                    }
                } elseif ($v1 == 2) {
                    rsort($valores);
    
                    foreach($valores as $chave => $valor ){
                        echo $valor.'<br>';
                    }
                } elseif ($v1 == 3) {
                    $auxiliar = 0;
    
                    if ($auxiliar < $a) {
                        $auxiliar = $a;
    
                        $result = $c." ".$auxiliar. " ".$b;
                        
                        if ($auxiliar < $b){
                            $auxiliar = $b;
    
                            $result = $c." ".$auxiliar. " ".$a;
    
                            if ($auxiliar < $c){
                                $auxiliar = $c;
    
                                $result = $a." ".$auxiliar. " ".$b;
                            }
                        }
                    }
    
                    echo $result;
                }
            } else {
                echo "Digite os valores acima.";
            }
        ?>
    </body>
</html>
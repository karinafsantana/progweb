<?php
//switch - Estrutira condicional//

$fruta = "morango";
$valor = 3;
switch ($fruta){
    case "maça":
        $valor += 3;
        break;
    case "banana":
        $valor += 5;
        break;
    case "morango":
        $valor += 7;
        break;
    default:
        $valor +=1;
}
echo $valor;

?>
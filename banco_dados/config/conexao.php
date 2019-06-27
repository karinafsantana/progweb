<?php

try
{
    //conexão local xanpp
    $host   ='localhost';
    $banco  ='bd_assistentes';
    $usuario='root';
    $senha  ='';

    $conexao = new PDO("mysql:host=$host;dbname=$banco;charset=utf8", $usuario, $senha);

    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Uhul to conectado";
}
catch(PODException $e)
{
    echo "Opa algo de errado não está certo"; 
}
?>

<?php
date_default_timezone_set('America/Sao_Paulo');
$nome          =$_POST["nome"];
$usuario       =$_POST["usuario"];
$senha         =$_POST["senha"];
$cargo         =$_POST["cargo"];
$administrador =$_POST["administrador"];
$hora          =$_POST["hora"];

echo "Nome: ".$nome."<br>";
echo "Usuario: ".$usuario."<br>";
echo "Senha: ".$senha."<br>";
echo "Cargo: ".$cargo."<br>";
echo "Administrador: ".$administrador."<br>";
echo "Hora:".date.('H')
?>


<?php
//if simples
if(isset($_GET["submit"])){
    //if com else
    if($_GET["idade"]=="mais"){
        header("location: https://www.uol.com.br/");
    }else{
        header("location: https://g1.globo.com/");
    }
}
?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>HTML com if e Else em PHP</title>
</head>
<body>
<!-- Restante da estrutura html -->

    <div id="formulario">
        <h1>VOCÊ TEM MAIS QUE 18 ANOS?</h1>
        <form>
            <input type="radio" name="idade" value="mais">Sim
            <input type="radio" name="idade" value="menos">Não<br>
            <input type="submit" name="submit" value="Entrar">
        </form>
    </div>
<!-- Restante da estrutura html -->    
</body>
</html>
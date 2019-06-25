<?php
if(isset($_GET["enviar"])){
    $palavra = strrev($_GET["nomecompleto"]);
    $tamanho = strlen($palavra);
    $resultado = "";
    for($x=0;$x<$tamanho;$x++){
        $resultado .= "<br>".substr($palavra,0,$x+1);
    }
}else{
    $resultado = "Nenhum resultado disponivel!";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Revisão - Web</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="assets/css/estilo.css" type="text/css">
    </head>
    <body>
        <main>
            <header>Topo</header>
            <section>
                <div>
                    <p>
                        Utilize o formulário abaixo para gerar o resultado:
                    </p>
                    <form action="index.php" method="get">
                        <label for="nomecompleto">
                        <input type="text" name="nomecompleto" placehoider="Informe o nome">
                        <input type="submit" name="enviar" value="Gerar">
                    </form>
                    <div id="resultado">
                        <?php
                            echo $resultado;
                        ?>
                    </div>
                </div>
            </section>
            <footer>Rodapé</footer>
        </main>
    </body>
</html>
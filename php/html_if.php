<?php
//utilizaçãodo IF simples
if(isset($_POST["submit"])){
    //atribuição de valores dos formularios nas variaveis
    /*
    $variavel  =$_POST["campoDoFormulario"];
    */
    $nome       =$_POST["nome"];
    $nascimento =$_POST["datadenascimento"];
    $doador     =$_POST["doador"];
}
?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>HTML com if em PHP</title>
</head>
<body>
    <!-- Restante da estrutura html -->
    <div id="fromulario"></div>
        <form action="html_if.php" method="post">
            <label for="nome">Nome</label>
            <input type="text" name="nome"placecholder="Informe seu nome"><br>
            <label for="datedenascimento">Nascimento</label>
            <input type="date" name="datadenascimento"placecholder="informe sua data de nascimento"><br>
            <label for="doador">Você e um doador</label>
            <input type="radio" name="doador" value="s">Sim
            <input type="radio" name="doador" value="n">Não<br>
            <input type="submit" name="submit" value="cadastrar">
        </form>
    </div>
    <?php
    if(isset($_POST["submit"])){
    ?>        
        <div id="resultado">
            <h3>Obrigado por preencher o seu cadastro!</h3>
            <h5>Confirme seus dados abaixo:</h5>
            <p>
                Nome:<?php echo $nome; ?><br>
                Nascimento:<?php echo date("d/m/Y", strtotime($nascimento));?><br>
                <?php
                if($doador=="s"){
                    echo "Você é um doador de órgãos!";
                }
                ?>
            </p>
        </div>
    <?php
    }
    ?>
    <!--Restante da estrutura -->
</body>
</html>
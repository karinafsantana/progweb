<?php
if(isset($_POST["submit"])){
    $diadasemana=$_POST["programacao"];
    switch($diadasemana){
        case 1:
             $dia = array(
                array("programa" => "Fantastico", "hora" =>"20:00" ),
                array("programa" => "Fasltao", "hora" =>"18:00" ),
             );
            break;
        case 2:
            $dia = array(
               array("programa" => "Jornal nacional", "hora" =>"20:30" ),
               array("programa" => "tela quente", "hora" =>"22:00" ),
            );
           break;
        case 3:
            $dia = array(
               array("programa" => "mais vc", "hora" =>"10:30" ),
               array("programa" => "bom dia brasil", "hora" =>"08:00" ),
            );
           break;
        case 4:
            $dia = array(
               array("programa" => "Globo Esporte", "hora" =>"12:30" ),
               array("programa" => "jornal hoje", "hora" =>"22:00" ),
            );
           break;
        case 5:
            $dia = array(
               array("programa" => "Vale a Pena Ver de Novo - Por Amor", "hora" =>"16:30" ),
               array("programa" => "Órfãos da Terra", "hora" =>"18:30" ),
            );
           break;
        case 6:
            $dia = array(
               array("programa" => "Sessão da Tarde ", "hora" =>"14:30" ),
               array("programa" => "Jornal Hoje", "hora" =>"13:30" ),
            );
           break;
        case 7:
            $dia = array(
               array("programa" => "Sai de Baixo - Sai De Baixo ", "hora" =>"14:00" ),
               array("programa" => "Caldeirão do Huck", "hora" =>"16:00" ),
            );
           break;                                        
    }        
}        
?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>HTML com 1switch em PHP</title>
</head>
<body>
    <div id="formulario">
        <form action="html_1switch.php">
            <label for="GSHOW">Programação da semana.</label>
            <select name="programacao">
                <option value="1">Domingo</option>
                <option value="2">Segunda</option>
                <option value="3">Terça</option>
                <option value="4">Quarta</option>
                <option value="5">Quinta</option>
                <option value="6">Sexta</option>
                <option value="7">Sabado</option>
                <input type="submit" name="submit" value="Ver programacao">
            </select>
        </form>
    </div>
<?php
if(isset($_POST["submit"])){
?>
    <div id="resultado">
        <table border="1">
                <tr>
                    <th>Programação</th>                    
                    <th>Hora</th>
                </tr>
            <?php
            do {
                $itens= 0;
                    echo "<td>".$dia[$itens]["programa"]."</td>";                   
                    echo "<td>".$dia[$itens]["hora"]." </td>";                    
                $itens++;
            } while($itens< count($dia));
            ?>
                <tr>
                    <th colspan="3">progrma</th>
                    <th><?php echo $dia;?></th>
                </tr>
                <tr>
                    <th colspan="3">hora</th>
                    <th><?php echo $dia;?></th>
                </tr>
        </table>    
    </div>
    <?php
}
    ?>
</body>
</html>
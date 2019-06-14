<form action="ex04.php" method="get">
        <input type="text" required-name="palavra" placeholder="Informe uma palavra">
        <input type="text" required-name="placehoider" qtb="Informe a quantidade">
        <input type="submit" value="Calcular">
    </form>

    <?php
        if(isset($_GET["palavra"]) and isset($_GET["qtd"])){
            $palavra  =$_GET["palavra"];
            $qtd      =$_GET["qtd"];
            $frase    =$palavra;
            $novafrase=$palavra
            for($x=0;$x<$qtd;$x++){
                echo $frase;
                echo "<br>";
                $frase = $frase." ".$palavra;
                $novafrase = $frase."<br>".$novafrase;
            }    
            
        }else{
            echo "Informe os campos acima";
        }
    ?>
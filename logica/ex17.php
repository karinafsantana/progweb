<form action="ex17.php" method="get">
        <input type="text" required name="palavra" placeholder="Informe uma palavra">
        <input type="text" required name="qtd" qtb="Informe a quantidade">
        <input type="submit" value="Calcular">
    </form>

    <?php
        if(isset($_GET["palavra"]) and isset($_GET["qtd"])){
            $palavra  =$_GET["palavra"];
            $qtd      =$_GET["qtd"];
            $frase    =$palavra;
            $novafrase=$palavra;
            for($x=1;$x<$qtd;$x++){ 
                $frase = $frase." ".$palavra;
                $novafrase = $frase."<br>".$novafrase;
            }    
            echo $novafrase;
        }else{
            echo "Informe os campos acima";
        }
    ?>
<?php
$logonormal ="https://www.google.com.br/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png";
$logoaniversario ="https://s3.amazonaws.com/images.seroundtable.com/googles-18th-birthday-logo-1474898702.gif";
$nascinemto ="07-01";
?>

<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>HTML com if reduzido em PHP</title>
</head>
<body style="text-align:center;">
    <!-- Restante da estrutura html -->
    <img src="<?php echo (date("m-d") == $nascinemto ? $logoaniversario :
    $logonormal); ?>"style="width:400px;"><br>
    <input type="text"name="buscar" placeholder="o que deseja saber?">
    <!-- Restante da estrutura html -->
</body>
</html>
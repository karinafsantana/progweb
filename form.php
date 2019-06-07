<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
</head>
<body>
    <form id="contato" action="recebe.php" method="get">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" placeholder="Informe o nome">
        
        <label for="sobrenome">Sobrenome</label>
        <input type="sobrenome" name="sobrenome" id="sobrenome" placeholder="Informe o sobrenome">

        <label for="nascimento">Data de nascimento</label>
        <input type="date" name="nascimento" id="nascimento" placeholder="Informe o nascimento">

        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" placeholder="Informe o email">

        <input type="submit" name="submit" id="submit" value="Salvar">

    </form>
</body>
</html>
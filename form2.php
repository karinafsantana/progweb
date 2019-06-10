<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário</title>
</head>
<body>
    <form id="contato" action="recebe2.php" method="post">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" placeholder="Informe o nome">
            <br>
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario" id="usuario" placeholder="Informe">
            <br>
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" placeholder="Inforne a senha">
            <br>
            <label for="cargo">Cargo</label>
            <select id="cargo" name="cargo">
                <option value="1">Gerente</option>
                <option value="2">Auxiliar Administrativo</option>
                <option value="3">Secretária</option>
                <option value="4">Aprendiz</option>
            </select>
            <br>
            <label for="administrador">Administrador</label>
            <input type="radio" name="administrador" id="administrador" value="s">Sim
            <input type="radio" name="administrador" id="administrador" value="n">Não
            <br>
            <input type="submit" name="submit" id="submit" value="cadastrar">
    </form>
</body>
</html>
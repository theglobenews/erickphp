<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>

<h1>Acesse sua conta</h1>

<form method="POST" action="../index.php?route=login">
    <p>
        <label>E-mail</label>
        <input type="text" name="email">
    </p>

    <p>
        <label>Senha</label>
        <input type="password" name="senha">
    </p>

    <p>
        <button type="submit">Entrar</button>
    </p>
</form>

</body>
</html>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar tarefa</title>
    <style>
        body{
            background-color: aqua
        }
    </style>
</head>
<body>

<h1>Editar tarefa</h1>

<form action="index.php?route=atualizar" method="POST">
    <input type="hidden" name="id" value="<?php echo $tarefa['id']; ?>">
    <input type="text" name="descricao"
           value="<?php echo htmlspecialchars($tarefa['descricao']); ?>" required>
    <button type="submit">Salvar</button>
</form>

<a href="index.php?route=tarefas">Voltar</a>

</body>
</html>

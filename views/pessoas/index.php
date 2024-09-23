<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pessoas</title>
</head>
<body>
<h1>Lista de Pessoas</h1> 

<a href="create.php">Cadastrar Nova Pessoa</a> 

<table> 

    <thead> 

        <tr> 

            <th>Nome</th> 

            <th>E-mail</th> 

            <th>Telefone</th> 

            <th>Ações</th> 

        </tr> 

    </thead> 

    <tbody> 

        <?php foreach ($pessoas as $pessoa): ?> 

        <tr> 

            <td><?= htmlspecialchars($pessoa['nome']) ?></td> 

            <td><?= htmlspecialchars($pessoa['email']) ?></td> 

            <td><?= htmlspecialchars($pessoa['telefone']) ?></td> 

            <td> 

                <a href="show.php?id=<?= $pessoa['id'] ?>">Ver Currículo</a> | 

                <a href="edit.php?id=<?= $pessoa['id'] ?>">Editar</a> | 

                <a href="delete.php?id=<?= $pessoa['id'] ?>" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a> 

            </td> 
        </tr> 
        <?php endforeach; ?> 
    </tbody> 
</table> 
</body>
</html>
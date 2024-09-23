<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Curriculos</title>
</head>
<body>
<h1>Lista de Currículos</h1> 

<a href="create.php">Cadastrar Novo Currículo</a> 

 
<table> 

    <thead> 

        <tr> 

            <th>Nome da Pessoa</th> 

            <th>Cargo Desejado</th> 

            <th>Ações</th> 

        </tr> 

    </thead> 

    <tbody> 

        <?php foreach ($curriculos as $curriculo): ?> 

        <tr> 

            <td><?= htmlspecialchars($curriculo['nome']) ?></td> 

            <td><?= htmlspecialchars($curriculo['cargo_desejado']) ?></td> 

            <td> 

                <a href="show.php?id=<?= $curriculo['id'] ?>">Ver Currículo</a> | 

                <a href="edit.php?id=<?= $curriculo['id'] ?>">Editar</a> | 

                <a href="delete.php?id=<?= $curriculo['id'] ?>" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a> 

            </td> 

        </tr> 

        <?php endforeach; ?> 

    </tbody> 

</table> 
</body>
</html>
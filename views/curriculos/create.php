<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Novo Curriculo</title>
</head>
<body>
<h1>Cadastrar Novo Currículo</h1> 

<form action="store.php" method="POST" enctype="multipart/form-data"> 

    <label for="pessoa_id">Pessoa:</label> 

    <select name="pessoa_id" required> 

        <?php foreach ($pessoas as $pessoa): ?> 

            <option value="<?= $pessoa['id'] ?>"><?= htmlspecialchars($pessoa['nome']) ?></option> 

        <?php endforeach; ?> 

    </select> 

    <label for="cargo_desejado">Cargo Desejado:</label> 

    <input type="text" name="cargo_desejado" required> 

 

    <label for="experiencias">Experiências Profissionais:</label> 

    <textarea name="experiencias" required></textarea> 

 

    <label for="habilidades">Habilidades:</label> 

    <textarea name="habilidades"></textarea> 

 

    <label for="arquivo_pdf">Upload do Currículo (PDF):</label> 

    <input type="file" name="arquivo_pdf" accept="application/pdf"> 

 

    <button type="submit">Cadastrar Currículo</button> 

</form> 
</body>
</html>
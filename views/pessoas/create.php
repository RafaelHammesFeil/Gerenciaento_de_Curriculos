<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Nova Pessoa</title>
</head>
<body>
<h1>Cadastrar Nova Pessoa</h1> 

<form action="store.php" method="POST"> 

    <label for="nome">Nome:</label> 

    <input type="text" name="nome" required> 

 

    <label for="email">E-mail:</label> 

    <input type="email" name="email" required> 

 

    <label for="telefone">Telefone:</label> 

    <input type="text" name="telefone"> 

 

    <label for="data_nascimento">Data de Nascimento:</label> 

    <input type="date" name="data_nascimento"> 

 

    <button type="submit">Cadastrar Pessoa</button> 

</form>  
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Novo Usuário</title>
</head>
<body>
<h1>Cadastro de Usuário</h1> 

<form action="register.php" method="POST"> 

    <label for="nome">Nome:</label> 

    <input type="text" name="nome" required> 

 

    <label for="email">E-mail:</label> 

    <input type="email" name="email" required> 

 

    <label for="senha">Senha:</label> 

    <input type="password" name="senha" required> 

 

    <label for="confirm_senha">Confirme a Senha:</label> 

    <input type="password" name="confirm_senha" required> 

 

    <button type="submit">Cadastrar</button> 

</form> 

<p>Já tem uma conta? <a href="login.php">Faça Login</a></p> 
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
</head>
<body>
<h1>Login</h1> 

<form action="login.php" method="POST"> 

    <label for="email">E-mail:</label> 

    <input type="email" name="email" required> 

 

    <label for="senha">Senha:</label> 

    <input type="password" name="senha" required> 

 

    <button type="submit">Login</button> 

</form> 

<p>Não tem uma conta? <a href="register.php">Cadastre-se</a></p> 
</body>
</html>
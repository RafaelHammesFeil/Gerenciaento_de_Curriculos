<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualização de Curriculo</title>
</head>
<body>
<h1>Detalhes do Currículo</h1> 

<p><strong>Nome:</strong> <?= htmlspecialchars($curriculo['nome']) ?></p> 

<p><strong>E-mail:</strong> <?= htmlspecialchars($curriculo['email']) ?></p> 

<p><strong>Telefone:</strong> <?= htmlspecialchars($curriculo['telefone']) ?></p> 

<p><strong>Cargo Desejado:</strong> <?= htmlspecialchars($curriculo['cargo_desejado']) ?></p> 

<p><strong>Experiências Profissionais:</strong> <?= htmlspecialchars($curriculo['experiencias']) ?></p> 

<p><strong>Habilidades:</strong> <?= htmlspecialchars($curriculo['habilidades']) ?></p> 

 

<?php if ($curriculo['arquivo_pdf']): ?> 

    <p><strong>Currículo PDF:</strong> <a href="uploads/<?= htmlspecialchars($curriculo['arquivo_pdf']) ?>" target="_blank">Baixar Currículo</a></p> 

<?php endif; ?> 

 

<a href="index.php">Voltar para a lista de currículos</a> 
</body>
</html>
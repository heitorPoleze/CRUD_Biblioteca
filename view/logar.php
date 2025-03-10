<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/config.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/mainCriarConta.css">
    <link rel="stylesheet" href="../css/footer.css">
    <title>Login</title>
</head>

<?php 
include './padrao.php';
echo topo();

echo '
    <h1> Login </h1>
    <main>
        <form action="../backend/login.php" method="post">
            <p>Insira seu usuario: <input type="text" name="username"></p>
            <p>Insira sua senha: <input type="text" name="senha"></p>
            <p><button type="submit">Enviar</p>
        </form>
    </main>';

echo rodape();
?>
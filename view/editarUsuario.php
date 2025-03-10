<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/config.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <title>Editar Usuário</title>
</head>

<?php 
include './padrao.php';

echo topo();
echo '<main>
        <form action="../backend/editarUsuario.php" method="post">
        <h1>Editar seus Dados</h1>
            <p>Insira um novo usuario: <input type="text" name="username"></p>
            <p>Insira uma nova senha: <input type="text" name="senha"></p>
            <p><button type="submit">Enviar</p>
        </form>
    </main>';

echo rodape();
?>    
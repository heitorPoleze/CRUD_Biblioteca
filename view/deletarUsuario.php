<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/config.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <title>DELETAR USUARIO</title>
</head>
<?php 
include './padrao.php';
echo topo();
echo '<main>
        <form action="../backend/excluirConta.php" method="post">
        <h1>DELETAR USUARIO E FUNCIONARIO</h1>
            <p>Insira um username: <input type="text" name="username"></p>
            <p><button type="submit">Enviar</p>
        </form>
    </main>';

echo rodape();
?>
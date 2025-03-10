<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/config.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/mainCriarConta.css">
    <link rel="stylesheet" href="../css/footer.css">
    <title>Criar conta</title>
</head>
<?php 
include './padrao.php';
session_destroy();
echo topo();
echo '<main>
        <form action="../backend/cadastrarUsuario.php" method="post">
            <p>Selecione o tipo da sua conta:</p>
            <select name="tipo">
                <option value="" selected disabled> - </option>
                <option value="user"> Usuário </option>
                <option value="func"> Funcionário </option>
            </select>
            <p>Insira um usuario: <input type="text" name="username"></p>
            <p>Insira uma senha: <input type="text" name="senha"></p>
            <p><button type="submit">Enviar</p>
        </form>
    </main>';

echo rodape();
?>

    
   

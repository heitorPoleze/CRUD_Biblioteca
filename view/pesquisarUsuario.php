<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/config.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <title>Pesquisar Usuario</title>
</head>

<?php 
include './padrao.php';

echo topo();
if($_SESSION['funcionario'] !== true){
echo " para acessar esta pagina, vocé precisa ser um funcionário. <br>";    
}else{
echo '<main>
    
        <form action="../backend/pesquisarUsuario.php" method="post">
        <h1>Buscar dados de Usuário</h1>
            <p>Insira um usuario: <input type="text" name="username"></p>
            <p><button type="submit">Enviar</p>
        </form>
    </main>';
}
echo rodape();
?>
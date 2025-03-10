<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/config.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <title>Excluir sua Conta</title>
</head>
<?php 
include './padrao.php';
if(!isset($_SESSION['username'])){
    header("Location: logar.php");
}else if($_SESSION['funcionario'] !== true){
    echo topo();
    echo '<main>
            <form action="../backend/excluirConta.php" method="post">
            <h1>Excluir sua Conta</h1>
                <p>Insira sua senha: <input type="text" name="senha"></p>
                <p><button type="submit">Enviar</p>
            </form>
        </main>';
    
    echo rodape();    
}else{
    header("Location: deletarUsuario.php");  
}

?>
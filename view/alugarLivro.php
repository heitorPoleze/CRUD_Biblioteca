<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/config.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <title>Alugar Livro</title>
</head>

<?php 
include './padrao.php';
echo topo();
if(@$_SESSION['funcionario'] !== true && isset($_SESSION['username'])){
    echo "<main>
            <form action='../backend/alugarLivro.php' method='post'>
            <p>Insira o nome do livro que deseja alugar: <input type='text' name='livro'></p>
            <p><button type='submit'>Enviar</p>
            </form>";
}else{
    echo "Para alugar, é preciso ser usuário.<br>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/config.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <title>Editar Livro</title>
</head>
<?php 
include './padrao.php';
echo topo();
if(@$_SESSION['funcionario'] !== true){
    echo "Para acessar essa pagina, você precisa ser um funcionário.<br>";
}else{
echo '<main>
        <form action="../backend/editarLivro.php" method="post">
        <h1>Editar Livro</h1>
            <p>Insira o ID do Livro: <input type="number" name="idLivro"></p>
            <p>Altere o nome: <input type="text" name="livro"></p>
            <p>Digite a nova quantidade em estoque: <input type="number" name="quantidade"></p>
            <p><button type="submit">Enviar</p>
        </form>
    </main>';
}
echo rodape();
?>
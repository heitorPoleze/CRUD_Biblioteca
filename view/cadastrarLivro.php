<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/config.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <title>Cadastro de Livro</title>
</head>
<?php
include './padrao.php';
echo topo();
if(@$_SESSION['funcionario'] !== true){
    echo " para acessar esta pagina, vocé precisa ser um funcionário. <br>";
}else{
    echo '<main>
            <form action="../backend/cadastrarLivro.php" method="post">
                <p>Insira o nome do Livro: <input type="text" name="livro"></p>
                <p>Insira a quantidade em estoque: <input type="number" name="quantidade"></p>
                <p><button type="submit">Enviar</p>
            </form>
        </main>';
}
echo rodape();
?>

<?php 
session_start();
include "../conexao.php";
include "funcoes.php";

$livrosPegos = [];
$livro = @$_POST['livro'];
$username = @$_SESSION['username'];

$sql = "UPDATE `livros` SET `qtd_estoque` = `qtd_estoque` - 1 WHERE `nome` = '$livro';";
if (mysqli_query($conexao, $sql)) {
    array_push($livrosPegos, $livro);
    $lista = "". implode(", ", $livrosPegos);
    $sql = "UPDATE `usuarios` SET `livros_pegos` = '$lista' WHERE `username` = '$username';";
    if (mysqli_query($conexao, $sql)) {
        echo "Livro alugado com sucesso.<br>";
    }else{
        echo "Livro não existe <br>";
    }
}
?>
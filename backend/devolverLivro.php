<?php 
session_start();
include "../conexao.php";
include "funcoes.php";

$livro = @$_POST['livro'];

$sql = "SELECT `username` FROM `usuarios` WHERE `livros_pegos` LIKE '%$livro%';";
$resultado = mysqli_query($conexao, $sql);
if (mysqli_num_rows($resultado) > 0) {
    $row = mysqli_fetch_assoc($resultado);
    $username = $row["username"];
    $sql = "UPDATE `usuarios` SET `livros_pegos` = NULL WHERE `username` = '$username';";
    if (mysqli_query($conexao, $sql)) {
        $sql = "UPDATE `livros` SET `qtd_estoque` = `qtd_estoque` + 1 WHERE `nome` = '$livro';";
        echo "Livro devolvido com sucesso.<br>";
    }
}else{
    echo "ERRO.";
    }
?>
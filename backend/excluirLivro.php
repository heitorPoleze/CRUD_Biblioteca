<?php
session_start();
include "../conexao.php";
include "funcoes.php";

$livro = @$_POST['livro'];

    if(!excluirLivro($livro, $conexao)){
        echo "Livro não existe. <br>";
    }else{
       //tá dando um erro de mysqli_query() que sempre retorna true. Não sei resolver, mas nunca entra nesse else 
        echo "Livro Excluído com sucesso.<br>";
    }
?>
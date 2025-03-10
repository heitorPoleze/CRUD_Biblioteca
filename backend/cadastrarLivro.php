<?php 
session_start();
include "../conexao.php";
include "funcoes.php";

$livro = @$_POST['livro'];
$quantidade = @$_POST['quantidade'];

if($livro == "" || $quantidade == "" || $livro == null || $quantidade < 1){
    echo "Preencha corretamente";
}else if($_SESSION['funcionario'] === true){
    if(cadastrarLivro($livro, $quantidade, $conexao)){
        echo "Livro cadastrado com sucesso.<br>";
    }else{
        echo "Livro já cadastrado .<br>";
    }
}
?>
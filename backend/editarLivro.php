<?php 
include "../conexao.php";
include "funcoes.php";

$idLivro = $_POST['idLivro'];
$livro = @$_POST['livro'];
$quantidade = @$_POST['quantidade'];

if($livro == "" || $quantidade == "" || $idLivro < 1 || $livro == "" || $quantidade < 1){
    echo "Preencha corretamente";
}else if(pesquisarIdLivro($idLivro, $conexao)){
    $sql = "UPDATE `livros` SET `nome` = '$livro', `qtd_estoque` = '$quantidade' WHERE `id_livros` = '$idLivro';";
    if(mysqli_query($conexao, $sql)){
        echo "Livro editado com sucesso.<br>";
    }else{
        echo "Livro já existe";
    }
}else{
    echo "Livro nao encontrado.";
}

?>
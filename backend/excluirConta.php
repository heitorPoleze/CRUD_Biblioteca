<?php 
session_start();

include "../conexao.php";
include "funcoes.php";
$senha = @$_POST['senha'];
$username = @$_POST['username'];

if(!isset($_SESSION['username'])){
    echo "Usuário não autenticado.";
}

if($_SESSION['funcionario'] === true){
    if(usuarioExiste("usuarios", $username, $conexao)){
        $tabela = "usuarios";

    }else if (usuarioExiste("funcionarios", $username, $conexao)){
        $tabela = "funcionarios";
    }
    $sql = "DELETE FROM `$tabela` WHERE `username` = '$username';";
    if(mysqli_query($conexao, $sql)){
        echo "Conta excluida com sucesso.<br>";
        if($username == $_SESSION['username']){
            session_destroy();
        }
    }else{
        echo "Usuário nao encontrado. <br>";
    }
}else{
    $tabela = "usuarios";
    $sql = "DELETE FROM `$tabela` WHERE `senha` = '$senha' AND `username` = '" . $_SESSION['username'] . "';";

    if (mysqli_query($conexao, $sql)) {
        echo "Conta excluida com sucesso.<br>";
    }else{
        echo "Senha incorreta. <br>";
    }
}

   
?>
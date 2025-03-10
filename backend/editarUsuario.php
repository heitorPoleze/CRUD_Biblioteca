<?php 
session_start();
include "../conexao.php";
include "funcoes.php";

$newUsername = @$_POST['username'];
$newSenha = @$_POST['senha'];

if(isset($_SESSION['username'])){
    $tabela = $_SESSION['funcionario'] === true ? "funcionarios" : "usuarios";
    if($newUsername != "" && $newSenha != ""){
        $sql = "UPDATE `$tabela` SET `username` = '$newUsername', `senha` = '$newSenha' WHERE `username` = '" . $_SESSION['username'] . "';";
    }else if ($newUsername != "" && $newSenha == ""){
        $sql = "UPDATE `$tabela` SET `username` = '$newUsername' WHERE `username` = '" . $_SESSION['username'] . "';";
    }else if ($newUsername == "" && $newSenha != ""){
        $sql = "UPDATE `$tabela` SET `senha` = '$newSenha' WHERE `username` = '" . $_SESSION['username'] . "';";
    }else{
        echo "Altere pelo menos um campo.<br>";
    }

    if (mysqli_query($conexao, $sql)) {
        echo "Dados alterados com sucesso.<br>";
        $_SESSION['username'] = $newUsername;
    }
}else{
    echo "Para usar dessa funcionalidade, é necessário estar logado.<br>";
}
?>
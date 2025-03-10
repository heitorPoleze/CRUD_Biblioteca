<?php 
session_start();

include "../conexao.php";
include "funcoes.php";

$username = $_POST['username'];
$senha = $_POST['senha'];

if (logarFuncionario($username, $senha, $conexao)) { 
    $_SESSION['username'] = $username;
    $_SESSION['funcionario'] = true;
    echo "Logado com sucesso como funcionário.";
}else if (logarUsuario($username, $senha, $conexao)) {
    $_SESSION['username'] = $username;
    $_SESSION['funcionario'] = false;
    echo "Logado com sucesso como usuário.";
} else {
    echo "Usuário ou senha incorretos.";
}
?>
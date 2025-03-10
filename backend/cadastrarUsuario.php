<?php 
include "../conexao.php";
include "funcoes.php";

$tipo = @$_POST['tipo'];
$username = @$_POST['username'];
$senha = @$_POST['senha'];

if ($username != "" && $senha != ""){
    if($tipo == "user" && !usuarioExiste("usuarios", $username, $conexao)) {
        criarConta("usuarios", $username, $senha, $conexao);
}else if($tipo == "func" && !usuarioExiste("funcionarios", $username, $conexao)) {
        criarConta("funcionarios", $username, $senha, $conexao);
}else{
    echo "Erro ao cadastrar: Usuário já existe. <br>";
}
}   


?>
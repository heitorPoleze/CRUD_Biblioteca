<?php 
session_start();
include "../conexao.php";
include "funcoes.php";

$username = @$_POST['username'];

if($_SESSION['funcionario'] === true){
    listarUsuario($username, $conexao);   
}
    

?>
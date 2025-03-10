<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/config.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <title>Acervo de Livros</title>
</head>

<?php
include './padrao.php';
include '../backend/funcoes.php';
include '../conexao.php';

echo topo();
echo '<main>
        <h1>Acervo de Livros</h1>
        <h2> Todos nossos livros abaixo: </h2>';
echo listarLivros($conexao);
echo '</main>';
echo rodape();

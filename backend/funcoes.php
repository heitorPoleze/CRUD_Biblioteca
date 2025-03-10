<?php  

function usuarioExiste($tabela, $username, $conexao){
    $sql = "SELECT `username` FROM `$tabela` WHERE `username` = '$username';";
    $resultado = mysqli_query($conexao, $sql);
    if(mysqli_num_rows($resultado) > 0){
        return true;
    }else{
        return false;
    }
}

function livroExiste($livro, $conexao){
    $sql = "SELECT * FROM `livros` WHERE `nome` = '$livro';";
    $resultado = mysqli_query($conexao, $sql);
    if(mysqli_num_rows($resultado) > 0){
        return true;
    }
        return false;
}
function logarUsuario ($username, $senha, $conexao){
    if (usuarioExiste("usuarios", $username, $conexao)){
        $sql = "SELECT `senha` FROM `usuarios` WHERE `username` = '$username' AND `senha` = '$senha';";
        $resultado = mysqli_query($conexao, $sql);
        if(mysqli_num_rows($resultado) > 0){
            return true;
        }
            return false;
    }
}

function logarFuncionario ($username, $senha, $conexao){
    if (usuarioExiste("funcionarios", $username, $conexao)){
        $sql = "SELECT `senha` FROM `funcionarios` WHERE `username` = '$username' AND `senha` = '$senha';";
        $resultado = mysqli_query($conexao, $sql);
        if(mysqli_num_rows($resultado) > 0){
            return true;
        }
    }
return false;
}        
        

function criarConta($tabela, $username, $senha, $conexao){
    $sql = "INSERT INTO `$tabela` (`username`, `senha`)
    VALUES ('$username', '$senha');"; 

    if (mysqli_query($conexao, $sql)) {
        echo "Usuário cadastrado com sucesso!";
}   else {
        echo "Erro ao cadastrar usuário: " . mysqli_error($conexao);
}
    mysqli_close($conexao);
}

function listarUsuario ($username, $conexao){
    $sql = "SELECT * FROM `usuarios` WHERE `username` = '$username';";
    $resultado = mysqli_query($conexao, $sql);
    if(mysqli_num_rows($resultado) > 0){
        $row = mysqli_fetch_assoc($resultado);
        echo "
        <br> <tr>
                <td> ID:" . $row["id_usuario"]. " <br> </td>
                <td> USERNAME:" . $row["username"]. " <br> </td>
                <td> Livros Pegos:" . $row["livros_pegos"]. "<br> </td>
            </tr> 
        <br>";
        return true;
    }
        echo "usuário não encontrado";
        return false;    
}  

function listarLivros($conexao){
    $sql = "SELECT * FROM `livros`;";
    $resultado = mysqli_query($conexao, $sql);
    if(mysqli_num_rows($resultado) > 0){
        while($row = mysqli_fetch_assoc($resultado)){
            echo "
            <br> <tr>
                    <td> ID:" . $row["id_livros"]. " <br> </td>
                    <td> NOME:" . $row["nome"]. " <br> </td>
                    <td> QUANTIDADE:" . $row["qtd_estoque"]. "<br> </td>
                </tr> 
            <br>";
        }
    }     
}

function cadastrarLivro($livro, $quantidade, $conexao){
    if(!livroExiste($livro, $conexao)){
        $sql = "INSERT INTO `livros` (`nome`, `qtd_estoque`) VALUES ('$livro', '$quantidade');";
    if (mysqli_query($conexao, $sql)) {
        return true;
    }
        return false;
    }
}
    
function excluirLivro($livro, $conexao){
    $sql = "DELETE FROM `livros` WHERE `nome` = '$livro';";
    $resultado = mysqli_query($conexao, $sql);
    if (mysqli_query($conexao, $sql)) {
        return true;
    }
        return false;
}

function pesquisarIdLivro($idLivro, $conexao){
    $sql = "SELECT `id_livros` FROM `livros` WHERE `id_livros` = '$idLivro';";
    if (mysqli_query($conexao, $sql)) 
        return true;
}

?>
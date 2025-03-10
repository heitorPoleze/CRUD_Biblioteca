<?php 
  session_start();

  function topo(){
        return '
        <body>
            <header>
                <a href="criarConta.php">Criar Conta</a>
                <a href="pesquisarUsuario.php">Pesquisar Usuário</a>
                <a href="logar.php">Login</a>
                <a href="editarUsuario.php">Editar Usuário</a>
                <a href="excluirConta.php">Excluir Conta</a>
                <a href="cadastrarLivro.php">Cadastrar Livro</a>
                <a href="listarLivro.php">Listar Livro</a>
                <a href="excluirLivro.php">Excluir Livro</a>
                <a href="editarLivro.php">Editar Livro</a>
                <a href="alugarLivro.php">Alugar Livro</a>
                <a href="devolverLivro.php">Devolver Livro</a>
            </header>';
    }

    function rodape(){
        if(isset($_SESSION['username'])){
        echo $_SESSION['username'];
    }else{
        echo "Não está logado.";
    }
        return '
         <footer>
            <p>Trabalho desenvolvido por Heitor Poleze Coelho Dias, aluno do 2º período de Sistemas para Internet.</p>
            <p>IFES Santa Teresa, 2025.</p>
        </footer>
    </body>
    </html>';
    }
?>

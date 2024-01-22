<?php

    include_once('config.php');

    if(isset($_POST['update'])) {
        $id = isset($_POST['id']) ? $_POST['id'] : '';
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];
        
        $sqlInsert = "UPDATE cadastro SET nome='$nome',senha='$senha',email='$email',telefone='$telefone',endereco='$endereco'
        WHERE id='$id'";
        $result = $conexao->query($sqlInsert);

        header('Location: http://localhost/projetosenac/src/php/sistema.php');

    } else {
        header('Location: http://localhost/projetosenac/src/php/sistema.php');
    }

?>
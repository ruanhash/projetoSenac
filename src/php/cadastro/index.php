    <?php

    if (isset($_POST['submit'])) {

        include_once('config.php');

        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $genero = $_POST['genero'];
        $nascimento = $_POST['nascimento'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO informacoes (nome,senha,email,telefone,genero,nascimento,estado,endereco)
        VALUES ('$nome', '$senha', '$email', '$telefone', '$genero', '$nascimento', '$estado', '$endereco')");

        header('location: login.php');
    }

    ?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>

        <main class="container">
            <div>
                <div class="title">
                    <h1>
                        Cadastro Clientes
                    </h1>
                </div>
                <div>
                    <form action="index
                    .php" method="post">
                        <div class="input">
                            <input type="text" name="nome">
                            <label for="nome">Nome Completo</label>
                        </div>
                        <div class="input">
                            <input type="password" name="senha">
                            <label for="senha">Senha</label>
                        </div>
                        <div class="input">
                            <input type="email" name="email" placeholder="usuario@email.com">
                            <label for="email">E-mail</label>
                        </div>
                        <div class="input">
                            <input type="text" name="telefone" placeholder="(DDD) xxxx-xxxx">
                            <label for="telefone">Telefone</label>
                        </div>
                        <div class="input">
                            <input type="text" name="endereco" placeholder="CEP">
                            <label for="endereco">Endereço</label>
                        </div>
                        <button id="button" type="submit">CADASTRO</button>
                    </form>
                </div>
            </div>
        </main>

    </body>

    </html>
    <?php

    if (isset($_POST['submit'])) {

        include_once('config.php');

        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO cadastro(nome,senha,email,telefone,endereco)
        VALUES ('$nome', '$senha', '$email', '$telefone','$endereco')");

        header('location: http://localhost:/projetosenac/src/php/login.php');
    } else {
        echo "ERRO";
    }

    ?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro</title>
    </head>

    <body>

        <main class="container">
            <div>
                <div class="title">
                    <a href="http://localhost/projetosenac">
                        <img src="http://localhost/projetosenac/src/images/logo.png" alt="logo" width="160">
                    </a>
                    <h1>
                        Cadastro Clientes
                    </h1>
                </div>
                <div>
                    <form action="cadastro.php" method="POST">
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
                        <button type="submit" name="submit">CADASTRAR</button>
                    </form>
                </div>
            </div>
        </main>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;700&display=swap');

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Rubik', sans-serif;
                outline: 0;
            }

            .container {
                display: flex;
                justify-content: center;
                margin: 30px 0 30px 350px;
                align-items: center;
                width: 780px;
                background-color: #F7F5F5;
                border-radius: 10px;
                gap: 70px;
                border: 2px solid black;
            }

            .title {
                margin-bottom: 50px;
                font-size: 24px;
                text-align: center;
                color: #fda51c;
            }

            form {
                display: flex;
                flex-direction: column;
                gap: 10px;
                padding-bottom: 30px;
            }

            .input {
                position: relative;
                margin: 20px 0;
                width: 450px;
            }

            .input label {
                position: absolute;
                left: 0;
                bottom: 5px;
            }

            input {
                width: 100%;
                border: none;
                border-bottom: 2px solid #ccc;
                padding: 5px;
                font-size: 17px;
                background-color: #F7F5F5;
            }

            input~label {
                transform: translateY(-25px);
                font-size: 14px;
            }

            button {
                height: 42px;
                background-color: rgb(24, 148, 219);
                border: none;
                border-radius: 5px;
                color: #ffffff;
                font-weight: 700;
                cursor: pointer;
                background-color: #fda51c;
            }

            button:hover {
                animation: translateY 0.8s alternate infinite;
            }

            @keyframes translateY {
                from {
                    transform: translateY(0) scale(1);
                }

                to {
                    transform: translateY(-2px) scale(1.05);
                }
            }
        </style>
    </body>

    </html>
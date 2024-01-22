<?php
include_once('config.php');

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $sqlSelect = "SELECT * FROM cadastro WHERE id=$id";
    $result = $conexao->query($sqlSelect);
    if ($result->num_rows > 0) {
        while ($user_data = mysqli_fetch_assoc($result)) {
            $nome = $user_data['nome'];
            $senha = $user_data['senha'];
            $email = $user_data['email'];
            $telefone = $user_data['telefone'];
            $endereco = $user_data['endereco'];
        }
    } else {
        header('Location: http://localhost/projetosenac/src/php/sistema.php');
    }
} else {
    header('Location: http://localhost/projetosenac/src/php/sistema.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>

<body>
    <a href="sistema.php">Voltar</a>
    <main class="container">
        <div>
            <div class="title">
                <a href="http://localhost/projetosenac">
                    <img src="http://localhost/projetosenac/src/images/logo.png" alt="logo" width="160">
                </a>
                <h1>
                    Editar Dados
                </h1>
            </div>
            <div>
                <form action="saveEdit.php" method="POST">
                    <div class="input">
                        <input type="text" name="nome" value="<?php echo $nome; ?>">
                        <label for="nome">Nome Completo</label>
                    </div>
                    <div class="input">
                        <input type="password" name="senha" value="<?php echo $senha; ?>">
                        <label for="senha">Senha</label>
                    </div>
                    <div class="input">
                        <input type="email" name="email" placeholder="usuario@email.com" value="<?php echo $email; ?>">
                        <label for="email">E-mail</label>
                    </div>
                    <div class="input">
                        <input type="text" name="telefone" placeholder="(DDD) xxxx-xxxx" value="<?php echo $telefone; ?>">
                        <label for="telefone">Telefone</label>
                    </div>
                    <div class="input">
                        <input type="text" name="endereco" placeholder="CEP" value="<?php echo $endereco; ?>">
                        <label for="endereco">Endereço</label>
                    </div>
                    <input type="hidden" name="id" value=<?php echo $id; ?>>
                    <button type="submit" name="update">EDITAR</button>
                </form>
            </div>
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
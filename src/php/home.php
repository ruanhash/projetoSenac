<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitHero</title>
</head>

<body>


    <div class="container">
        <div class="title">
            <a href="http://localhost:8080/projetosenac">
                <img src="http://localhost:8080/projetosenac/src/images/logo.png" alt="logo" width="160">
            </a>
        </div>
        <div class="options">
            <a href="http://localhost:8080/projetosenac/src/php/login.php">Login</a>
            <a href="http://localhost:8080/projetosenac/src/php/cadastro.php">Cadastre-se</a>
        </div>
    </div>
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
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 200px 100px;
            background-color: #ccc;
        }

        .options {
            display: flex;
            justify-content: space-between;
        }

        a {
            padding: 10px 30px;
            background-color: #fda51c;
            gap: 50px;
        }
    </style>
</body>

</html>
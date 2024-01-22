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
            <a href="http://localhost/projetosenac">
                <img src="http://localhost/projetosenac/src/images/logo.png" alt="logo" width="160">
            </a>
        </div>
        <div class="options">
            <a href="http://localhost/projetosenac/src/php/login.php">LOGIN</a>
            <a href="http://localhost/projetosenac/src/php/cadastro.php">CADASTRE-SE</a>
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
            justify-content: center;
            flex-direction: column;
            margin: 70px 0 30px 350px;
            align-items: center;
            width: 730px;
            height: 500px;
            background-color: #F7F5F5;
            border-radius: 10px;
            gap: 70px;
            border: 2px solid black;
        }

        .options {
            display: flex;
            gap: 100px;
        }

        .options a {
            padding: 10px 30px;
            background-color: #fda51c;
            border-radius: 10px;
            text-decoration: none;
            color: black;
            font-weight: 700;
        }

        a:hover {
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
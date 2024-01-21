<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <main class="container">
        <div>
            <div class="title">
                <a href="http://localhost:8080/projetosenac">
                    <img src="http://localhost:8080/projetosenac/src/images/logo.png" alt="logo" width="160">
                </a>
                <h1>
                    Faça o login
                </h1>
            </div>
            <div>
                <form action="testarlogin.php" method="POST">
                    <div class="input">
                        <input type="email" name="email">
                        <label for="email">E-mail</label>
                    </div>
                    <div class="input">
                        <input type="password" name="senha">
                        <label for="email">Senha</label>
                    </div>
                    <button name="submit" type="submit">LOGIN</button>
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
    margin: 70px 0 30px 350px;
    align-items: center;
    width: 730px;
    height: 500px;
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
    background-color: #fda51c;
    border: none;
    border-radius: 5px;
    color: #ffffff;
    font-weight: 700;
    cursor: pointer;
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
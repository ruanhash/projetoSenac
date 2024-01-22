<?php
session_start();
include_once('config.php');
// print_r($_SESSION);
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: http://localhost/projetosenac/src/php/login.php');
}
$logado = $_SESSION['email'];
if (!empty($_GET['search'])) {
    $data = $_GET['search'];
    $sql = "SELECT * FROM cadastro WHERE id LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY id DESC";
} else {
    $sql = "SELECT * FROM cadastro ORDER BY id DESC";
}
$result = $conexao->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/85a1987996.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>SISTEMA ADMIN</title>

<body>
    <header>
        <div class="header">
            <div class="logo">
                <a href="index.html" aria-label="Recarregue a página">
                    <img src="../images/logo.png" alt="logo" width="200" height="60">
                </a>
            </div>
            <div class="search">
                <label for="">
                    <a href="#search" aria-label="Pesquisar">
                        <i class="fas fa-magnifying-glass"></i>
                    </a>
                </label>
                <input id="search" type="text" placeholder="              Procure nossos Produtos !!!">
            </div>
            <div class="icons">
                <div id="icon">
                    <a href="http://localhost/projetosenac/src/php/home.php" aria-label=" Cadastre-se">
                        <i class="fas fa-circle-user"></i>
                    </a>
                    <p>Entre ou Cadastre-se!!!</p>
                </div>
                <div id="icon">
                    <a href="" aria-label="Carrinho">
                        <i class="fas fa-cart-shopping"></i>
                    </a>
                    <p>Carrinho</p>
                </div>
            </div>
        </div>
        </div>
    </header>
    <section class="welcome">
        <div class="wel">
            <?php
            echo "<h2>Bem vindo <u>$logado</u></h2>";
            ?>
        </div>
        <div class="out">
            <a href="sair.php">SAIR</a>
        </div>
    </section>
    <main>
        <section class="banner">
            <img src="../images/banner.jpeg" alt="" width="100%">
        </section>
        <div class="products">
            <div id="product">
                <h4>WHEY PROTEIN</h4>
                <a href="" aria-label="Whey">
                    <img src="../images/whey.png" alt="" width="190px" height="190px">
                </a>
            </div>
            <div id="product">
                <h4>CREATINA</h4>
                <a href="" aria-label="Creatina">
                    <img src="../images/creatina.png" alt="" width="190px" height="190px">
                </a>
            </div>
            <div id="product">
                <h4>ACESSÓRIOS</h4>
                <a href="" aria-label="Acessórios">
                    <img src="../images/acessorios.jpeg" alt="" width="190px" height="190px">
                </a>
            </div>
            <div id="product">
                <h4>VESTUÁRIO</h4>
                <a href="" aria-label="Vestuário">
                    <img src="../images/vestuario.jpeg" alt="" width="190px" height="190px">
                </a>
            </div>
            <div id="product">
                <h4>ALIMENTOS</h4>
                <a href="" aria-label="Alimentos">
                    <img src="../images/alimentos.jpeg" alt="" width="190px" height="190px">
                </a>
            </div>
        </div>
    </main>
</body>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Rubik:wght@400;700&display=swap');

    :root {
        --primary-color: #fda51c;
        --secondary-color: #f6faf4;
        --tertiary-color: #000000;
        --quartenary-color: #874896;
        --quinary-color: #ff3637;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Rubik', sans-serif;
    }

    i {
        color: var(--tertiary-color);
        font-size: 1.3rem;
    }

    a {
        color: var(--tertiary-color);
        text-decoration: none;
    }

    body {
        background-color: var(--secondary-color);
    }

    .header {
        display: flex;
        align-items: center;
        background-color: var(--primary-color);
    }

    .logo {
        margin: 28px 36px;
    }

    .search {
        margin-left: 170px;
    }

    .search input {
        width: 450px;
        height: 60px;
        border-radius: 10px;
        cursor: pointer;
        font-weight: 700;
    }

    input:focus {
        border: 3px solid var(--tertiary-color);
        outline: none;
    }

    .search label {
        margin: 18px 400px;
        position: absolute;
    }

    .icons {
        display: flex;
        gap: 60px;
        white-space: nowrap;
        text-align: center;
        margin: 0 230px;
    }

    .welcome {
        display: flex;
        align-items: center;
        justify-content: space-evenly;
    }

    .welcome .wel {
        font-size: 20px;
        font-weight: 700;
    }

    .out {
        padding: 8px;
        background-color: var(--quinary-color);
        border-radius: 10px;
    }

    .banner {
        margin: 2px 0 20px 0;
    }

    #product {
        color: var(--tertiary-color);
        font-size: larger;
        letter-spacing: 1.6px;
        text-align: center;
    }

    #product img {
        border-radius: 70px;
        margin-top: 10px;
    }

    .products {
        display: flex;
        justify-content: space-around;
    }
</style>

</html>
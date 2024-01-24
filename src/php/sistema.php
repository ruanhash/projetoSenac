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
                <a href="http://localhost/projetosenac/src/php/home.php" aria-label="Recarregue a página">
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
                <a href="http://localhost/projetosenac/whey.html" aria-label="Whey">
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
        <section>
            <div class="title">
                <h1>Mais Vendidos</h1>
            </div>

            <div id="produtos">
                <div class="container mt-4 container-produtos">

                    <div class="row">

                        <!-- Produto 1 -->
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="../images/1kl.png" class="card-img-top" alt="Produto 1">
                                <div class="card-body">
                                    <h5 class="card-title">Whey Pro - Max Titanium</h5>
                                    <p class="card-text">Whey Pro 1kg </p>
                                    <p class="card-text">Preço: R$120,99</p>
                                    <button class="btn btn-primary">Comprar</button>
                                    <button class="btn btn-carrinho ml-2" onclick="adicionarAoCarrinho()">Adicionar ao
                                        Carrinho</button>
                                </div>
                            </div>
                        </div>

                        <!-- Produto 2 -->
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="../images/whey3.png" class="card-img-top" alt="Produto 2">
                                <div class="card-body">
                                    <h5 class="card-title">Top Whey 3W - Max Titanium</h5>
                                    <p class="card-text">Top Whey 3W 900g</p>
                                    <p class="card-text">Preço: R$110,90</p>
                                    <button class="btn btn-primary">Comprar</button>
                                    <button class="btn btn-carrinho ml-2" onclick="adicionarAoCarrinho()">Adicionar ao
                                        Carrinho</button>
                                </div>
                            </div>
                        </div>

                        <!-- Produto 3 -->
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="../images/creatina-100-pura-probiotica.png" class="card-img-top" alt="Produto 3">
                                <div class="card-body">
                                    <h5 class="card-title">Creatina - Probiótica</h5>
                                    <p class="card-text">Creatina Pura 300g Probiotica - Probiótica</p>
                                    <p class="card-text">Preço: R$72,90</p>
                                    <button class="btn btn-primary">Comprar</button>
                                    <button class="btn btn-carrinho ml-2" onclick="adicionarAoCarrinho()">Adicionar ao
                                        Carrinho</button>
                                </div>
                            </div>
                        </div>

                        <!-- Produto 4 -->
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="../images/alfajor_com_whey_protein_c_12_dr_peanut_1263_1_b4574d6560d2bb5c490e99be8518d052.webp" class="card-img-top" alt="Produto 4">
                                <div class="card-body">
                                    <h5 class="card-title">Alfajor Avelã</h5>
                                    <p class="card-text">Alfajor avelã - chocolate</p>
                                    <p class="card-text">Preço: R$69,90</p>
                                    <button class="btn btn-primary">Comprar</button>
                                    <button class="btn btn-carrinho ml-2" onclick="adicionarAoCarrinho()">Adicionar ao
                                        Carrinho</button>
                                </div>
                            </div>
                        </div>

                        <!-- Produto 5 -->
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="../images/creatina-monohidratada-sem-sabor-300g-dux.jpg" class="card-img-top" alt="Produto 5">
                                <div class="card-body">
                                    <h5 class="card-title">Creatina - Dux Nutrition</h5>
                                    <p class="card-text">Creatina Monohidratada 100% Importada Pura 300g - Dux Nutrition
                                    </p>
                                    <p class="card-text">Preço: R$124,77</p>
                                    <button class="btn btn-primary">Comprar</button>
                                    <button class="btn btn-carrinho ml-2" onclick="adicionarAoCarrinho()">Adicionar ao
                                        Carrinho</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="../images/chocolate.png" class="card-img-top" alt="Produto 5">
                                <div class="card-body">
                                    <h5 class="card-title">Whey de Chocolate/h5>
                                        <p class="card-text">Whey de chocolate - Cacau 100%
                                        </p>
                                        <p class="card-text">Preço: R$130,77</p>
                                        <button class="btn btn-primary">Comprar</button>
                                        <button class="btn btn-carrinho ml-2" onclick="adicionarAoCarrinho()">Adicionar ao
                                            Carrinho</button>
                                </div>
                            </div>
                        </div>
        </section>
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

    .title {
        text-align: center;
        margin: 80px 0 80px 0;
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


    #produtos {

        background-size: cover;
        padding: 40px 0;
    }

    .container-produtos {
        background-color: rgba(255, 255, 255, 0.8);
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card {
        margin-bottom: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .btn-primary {
        background-color: #fda51c;
    }

    .btn-primary:hover {
        background-color: #ff651c;
    }

    .btn-carrinho {
        background-color: #28a745;
    }

    .btn-carrinho:hover {
        background-color: #218838;
    }
</style>

</html>
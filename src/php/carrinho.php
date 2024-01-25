<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
</head>

<body>
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
                <a href="http://localhost/projetosenac/src/php/carrinho.php" aria-label="Carrinho">
                    <i class="fas fa-cart-shopping"></i>
                </a>
                <p>Carrinho</p>
            </div>
        </div>
    </div>
    </div>
    </header>
    <div>

    </div>
    <?php
    session_start();
    $products = array(
        "1" => array("name" => "Whey Pro - Max Titanium", "price" => 120.99, "image" => "http://localhost/projetosenac/src/images/1kl.png"),
        "2" => array("name" => "Top Whey 3W - Max Titanium", "price" => 110.90, "image" => "http://localhost/projetosenac/src/images/whey3.png"),
        "3" => array("name" => "Creatina - Probiótica", "price" => 72.90, "image" => "http://localhost/projetosenac/src/images/creatina-100-pura-probiotica.png"),
        "4" => array("name" => "Alfajor Avelã", "price" => 39.90, "image" => "http://localhost/projetosenac/src/images/alfajor_com_whey_protein_c_12_dr_peanut_1263_1_b4574d6560d2bb5c490e99be8518d052.webp"),
        "5" => array("name" => "Creatina - Dux Nutrition", "price" => 124.77, "image" => "http://localhost/projetosenac/src/images/creatina-monohidratada-sem-sabor-300g-dux.jpg"),
        "6" => array("name" => "Whey de Chocolate", "price" => 100.77, "image" => "http://localhost/projetosenac/src/images/chocolate.png"),
    );

    if (isset($_GET["add"]) && isset($products[$_GET["add"]])) {
        $product_id = $_GET["add"];
        $_SESSION["cart"][$product_id]["quantity"] = isset($_SESSION["cart"][$product_id]["quantity"]) ? $_SESSION["cart"][$product_id]["quantity"] + 1 : 1;
    }

    if (isset($_GET["remove"]) && isset($products[$_GET["remove"]])) {
        $product_id = $_GET["remove"];
        if (isset($_SESSION["cart"][$product_id]["quantity"])) {
            $_SESSION["cart"][$product_id]["quantity"] -= 1;
            if ($_SESSION["cart"][$product_id]["quantity"] <= 0) {
                unset($_SESSION["cart"][$product_id]);
            }
        }
    }

    if (isset($_GET["clear"])) {
        unset($_SESSION["cart"]);
    }

    if (isset($_SESSION["cart"]) && count($_SESSION["cart"]) > 0) {
        echo "<h2>Carrinho de Compras</h2>";
        echo "<ul class='addCart'>";
        $total_price = 0;
        foreach ($_SESSION["cart"] as $product_id => $product) {
            $product_name = $products[$product_id]["name"];
            $product_price = $products[$product_id]["price"];
            $product_quantity = $product["quantity"];
            $subtotal = $product_price * $product_quantity;
            $total_price += $subtotal;

            echo "<li class='descricao'><img src='{$products[$product_id]["image"]}' alt='{$product_name}' style='max-height: 60px;'><div> {$product_name} - R$ {$product_price} x {$product_quantity} = R$ {$subtotal} <a href='?remove={$product_id}'>Remover</a></div></li>";
        }
        echo "</ul>";
        echo "<div class='preco'>";
        echo "<p>Total: R$ {$total_price}</p>";
        echo "<a href='?clear'>Limpar Carrinho</a>";
    } else {
        echo "<p>Carrinho vazio</p>";
    }
    echo "</div>";

    echo "<h2>Produtos Disponíveis</h2>";
    echo "<ul>";
    foreach ($products as $product_id => $product) {
        echo "<li class='produtos'><div class='produto'> <img src='{$product["image"]}' alt='{$product["name"]}' style='max-height: 150px;'> {$product["name"]} - R$ {$product["price"]} </div><a href='?add={$product_id}'>Adicionar ao Carrinho</a></li>";
    }
    echo "</ul>";
    ?>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rubik:wght@400;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Rubik', sans-serif;
        }

        body {
            background-color: #f8f9fa;
        }

        .header {
            display: flex;
            align-items: center;
            background-color: #fda51c;
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
            border: 3px solid black;
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

        i {
            color: black;
            font-size: 1.3rem;
        }

        .jumbotron {
            background-image: url('logo.jpg');
            width: -140%;
            background-size: cover;
            color: #fda51c;
            text-align: center;
            padding: 100px 0;
            margin-bottom: 0;
        }

        .card {
            margin-bottom: 20px;
        }

        .container a {
            background-color: #fda51c;
        }

        .produtos {
            display: inline-block;
            margin: 70px 30px;
            text-align: center;
            
        }

        .produto {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px;
        }

        .produto img {
            width: 200px;
        }

        li a {
            text-decoration: none;
            color: black;
            padding: 10px;
            background-color: #fda51c;
            cursor: pointer;
            border-radius: 10px;
        }

        h2 {
            margin-top: 40px;
            margin-bottom: 50px;
            text-align: center;
        }

        .addCart {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            text-align: center;
            margin: 10px;
            font-size: 18px;
            list-style: none;
        }

        .preco {
            text-align: center;
            font-size: 20px;
            color: #fda51c;
        }

        .descricao {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 20px;
        }

        .preco a {
            margin-top: 10px;
        }
    </style>
</body>

</html>
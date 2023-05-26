<!DOCTYPE html>
<html lang="es">
<?php include_once 'php_include/head_content.hphp'?>
<body>
<?php include_once 'php_include/header_content.hphp'?>
<main>
    <section class="breadcrumbs" id="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Mi carrito</h2>
                <ol>
                    <li><a href="index.php">Inicio</a></li>
                    <li>Carrito</li>
                </ol>
            </div>

        </div>
    </section>
    <div class="container">
        <?php
        include_once 'php_PDO/PDO_Connection.php';
        $config = new PDO_Connection();
        $pdo = $config->getPDO();
        $command = $pdo->prepare('CALL getCartProducts(:email)');
        $command->bindParam(':email', $_SESSION['user_email']);
        $command->execute();

        $result = $command->fetchAll(PDO::FETCH_CLASS);
        ?>

        <?php if (count($result) > 0): ?>
        <?php foreach ($result as $item): ?>
        <div class="row portfolio-container">
            <div class="col-lg-12 portfolio-item">
                <div class="col-lg-12 entries">
                    <form class="form-delete" method="post" target="_self" action="php_forms/delete_from_cart.php">
                        <input class="product-id" type="hidden" name="product_Id_delete" value="<?=$item->sale_productId?>">
                        <button id="delete" class="button-product-delete" type="submit">
                            <i class="fi fi-sr-cart-minus"></i>
                        </button>
                    </form>
                    <form class="form-product php-email-form" method="post" role="form">
                        <input class="product-id" type="hidden" name="product-id" value="<?=$item->sale_productId?>">
                        <i class="fi fi-sr-box-open icon-product"></i>
                        <div class="div-product-data">
                            <h3 class="product-name"><?=$item->product_name?></h3>
                            <p class="product-description"><?=$item->product_description?></p>
                            <p class="product-description">Total de producto: <?=$item->sale_total?></p>
                            <div class="product-description" id="amount">
                                <label for="select-amount">Cantidad: </label>
                                <button type="button" id="" class="button-product button-less">-</button>
                                <input id="select-amount" class="select-amount text-center"
                                       type="number" min="1" max="99" name="sale-amount" value="<?=$item->sale_amount?>">
                                <button type="button" id="" class="button-product button-more">+</button>
                            </div>
                        </div>
                        <button class="add-button" type="submit">
                            <i class="fi fi-sr-shopping-cart-check icon-add-product"></i>
                        </button>
                        <div class="my-3">
                            <div class="loading" style="border-radius: 10%; font-size: 15px"></div>
                            <div class="error-message" style="border-radius: 10%; font-size: 15px">
                                <i class="fi fi-br-times-hexagon"></i>
                            </div>
                            <div class="sent-message" style="border-radius: 10%; font-size: 15px">
                                <i class="fi fi-br-check"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
        <?php else: ?>
        <div class="text-center">
            <p style="font-size: 240%; margin: 12% 0 12% 0">
                No tienes productos en tu carrito, comienza a comprar <a href="products-search.php">aquí.</a>
            </p>
        </div>
        <?php endif; ?>
    </div>

    <form style="text-align: center" class="php-email-form" target="_self" action="php_forms/buy-cart.php">
        <button style="font-size: 2em;
                       border-radius: 10px;
                       margin: 50px auto"
                id="buy-button" class="button-product" type="submit">
            <i class="fi fi-sr-cart-arrow-down"></i>Comprar
        </button>
    </form>
</main>
<?php include_once './php_include/footer_content.hphp'?>
<?php include_once './php_include/scripts_content.hphp'?>
<script src="js/addToCart.js"></script>
<script src="js/inc_dec_buttons.js"></script>
</body>
</html>
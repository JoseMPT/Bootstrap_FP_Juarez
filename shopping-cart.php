<!DOCTYPE html>
<html lang="es">
<?php include_once './php_include/head_content.hphp'?>
<body>
<?php include_once './php_include/header_content.hphp'?>
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
    <div class="row portfolio-container">

            <div class="col-lg-12 portfolio-item">
                <div class="col-lg-12 entries">
                    <form class="form-delete" name="form_delete" method="get" action="user_delete_shoppingCart.php" target="_self">
                        <input class="product-id" type="hidden" name="product_Id_delete" value="1">
                        <button id="delete" class="button-product-delete" type="submit" name="button_product_delete" value="">
                            <i class="fi fi-sr-cart-minus"></i>
                        </button>
                    </form>
                    <form class="form-product php-email-form" method="post" role="form">
                        <input class="product-id" type="hidden" name="product-id" value="1">
                        <i class="fi fi-sr-box-open icon-product"></i>
                        <div class="div-product-data">
                            <h3 class="product-name">Martillo</h3>
                            <p class="product-description">Hola</p>
                            <p class="product-description">Precio: $45.00</p>
                            <div class="product-description" id="amount">
                                <label for="select-amount">Cantidad: </label>
                                <button type="button" id="" class="button-product button-less">-</button>
                                <input id="select-amount" class="select-amount text-center"
                                       type="number" min="1" max="99" name="sale-amount" value="1">
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
    <!--
    <form class="form-delete" name="form_delete" method="get" action="user_delete_shoppingCart.php" target="_self">
            <input class="product-id" type="hidden" name="product_Id_delete" value="1">
            <button id="delete" class="button-product-delete" type="submit" name="button_product_delete" value="">
                <i class="fi fi-sr-cart-minus"></i>
            </button>
        </form>

        <div class="col-lg-10 entries">
            <form class="form-product php-email-form" method="post" role="form">
                <input class="product-id" type="hidden" name="product-id" value="1">
                <i class="fi fi-sr-box-open icon-product"></i>
                <div class="div-product-data">
                    <h3 class="product-name">Martillo</h3>
                    <p class="product-description">Hola</p>
                    <p class="product-description">Precio: $45.00</p>
                    <div class="product-description" id="amount">
                        <label for="select-amount">Cantidad: </label>
                        <button type="button" id="" class="button-product button-less">-</button>
                        <input id="select-amount" class="select-amount text-center"
                               type="number" min="1" max="99" name="sale-amount" value="1">
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
    -->

    <form style="text-align: center" action="buy_products.php" target="_self">
        <button style="font-size: 3em; border-radius: 10px" id="edit" class="button-product" type="submit" name="button_product_edit">
            <i class="fi fi-sr-cart-arrow-down"></i>Comprar
        </button>
    </form>
</main>
<?php include_once './php_include/footer_content.hphp'?>
<?php include_once './php_include/scripts_content.hphp'?>
</body>
</html>
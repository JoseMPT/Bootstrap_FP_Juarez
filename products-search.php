<?php
include_once 'php_PDO/PDO_Connection.php';

$connection = new PDO_Connection();
$pdo = $connection->getPDO();

$command = $pdo->prepare('SELECT product_id,product_name,product_description,product_unitCost, product_inventory FROM products_data;');
$command->execute();

$result = $command->fetchAll(PDO::FETCH_CLASS)
?>

<!DOCTYPE html>
<html lang="es">
<?php include_once './php_include/head_content.hphp'?>
<body>
<?php include_once './php_include/header_content.hphp'?>
<main>
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs" id="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Productos y herramientas</h2>
                <ol>
                    <li><a href="index.php">Inicio</a></li>
                    <li>Productos</li>
                </ol>
            </div>

        </div>
    </section>
    <!-- End Breadcrumbs -->

    <!--<section class="blog" id="blog">
        <div class="container" data-aos="fade-up">
            <div class="row">

                <div class="col-lg-12">
                    <div class="sidebar">
                        <h3 class="sidebar-title">Búsqueda</h3>
                        <div class="sidebar-item search-form">
                            <form id="search-form" method="get">
                                <label for="search"></label>
                                <input id="search" name="text_search" type="text">
                                <button type="submit"><i class="bi bi-search"></i></button>
                            </form>
                        </div>


                    </div>

                </div>

            </div>
        </div>
    </section>-->

    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">Todo</li>
                        <li data-filter=".filter-tools">Herramientas</li>
                        <li data-filter=".filter-materials">Materiales</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container">
            <?php foreach ($result as $item):?>
                <div class="col-lg-12 portfolio-item <?=$item->product_inventory != 1 ? 'filter-materials' : 'filter-tools'?>">
                    <div class="col-lg-12 entries">
                        <form class="form-product php-email-form" method="post" role="form">
                            <input class="product-id" type="hidden" name="product-id" value="<?=$item->product_id?>">
                            <i class="fi fi-sr-box-open icon-product"></i>
                            <!--<img class="icon_products" src="icons/product.svg" alt="product">-->
                            <div class="div-product-data">
                                <h3 class="product-name"><?=$item->product_name?></h3>
                                <p class="product-description"><?=$item->product_description?></p>
                                <p class="product-description">Precio: $<?=$item->product_unitCost?></p>
                                <div class="product-description" id="amount">
                                    <label for="select-amount">Cantidad: </label>
                                    <button type="button" id="" class="button-product button-less">-</button>
                                    <input id="select-amount" class="select-amount text-center"
                                           type="number" min="1" max="99" name="sale-amount" value="1">
                                    <button type="button" id="" class="button-product button-more">+</button>
                                </div>
                            </div>
                            <button class="add-button" type="submit">
                                <i class="fi fi-sr-shopping-cart-add icon-add-product"></i>
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
            <?php endforeach;?>
            </div>
        </div>
    </section>

</main>
<?php include_once './php_include/footer_content.hphp'?>
<?php include_once './php_include/scripts_content.hphp'?>
<script src="js/inc_dec_buttons.js"></script>
<script src="js/addToCart.js"></script>
</body>
</html>
<?php
include_once 'php_PDO/PDO_Connection.php';

$connection = new PDO_Connection();
$pdo = $connection->getPDO();

$command = $pdo->prepare('SELECT product_id,product_name,product_description,product_unitCost FROM products_data;');
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

        <!-- ======= Blog Section ======= -->
        <section class="blog" id="blog">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <!-- Barra lateral -->
                    <div class="col-lg-12">
                        <div class="sidebar">
                            <h3 class="sidebar-title">Búsqueda</h3>
                            <div class="sidebar-item search-form">
                                <form action="" method="get">
                                    <label for="search"></label>
                                    <input id="search" name="text_search" type="text">
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </div>
                            <!-- Fin de form de búsqueda -->

                            <h3 class="sidebar-title">Categories</h3>
                            <div class="sidebar-item categories">
                                <ul>
                                    <li><a href="#">Herramientas <span></span></a></li>
                                    <li><a href="#">Materiales <span></span></a></li>
                                </ul>
                            </div>
                            <!-- Fin de categorías -->

                            <!-- Recientes -->
                            <!--<h3 class="sidebar-title">Recent Posts</h3>
                            <div class="sidebar-item recent-posts">
                                <div class="post-item clearfix">
                                    <img alt="" src="assets/img/blog/blog-recent-1.jpg">
                                    <h4><a href="blog-single.php">Nihil blanditiis at in nihil autem</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div>

                                <div class="post-item clearfix">
                                    <img alt="" src="assets/img/blog/blog-recent-2.jpg">
                                    <h4><a href="blog-single.php">Quidem autem et impedit</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div>

                                <div class="post-item clearfix">
                                    <img alt="" src="assets/img/blog/blog-recent-3.jpg">
                                    <h4><a href="blog-single.php">Id quia et et ut maxime similique occaecati ut</a>
                                    </h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div>

                                <div class="post-item clearfix">
                                    <img alt="" src="assets/img/blog/blog-recent-4.jpg">
                                    <h4><a href="blog-single.php">Laborum corporis quo dara net para</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div>

                                <div class="post-item clearfix">
                                    <img alt="" src="assets/img/blog/blog-recent-5.jpg">
                                    <h4><a href="blog-single.php">Et dolores corrupti quae illo quod dolor</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div>

                            </div>-->
                            <!-- Fin de productos recientes -->

                            <h3 class="sidebar-title">Etiquetas</h3>
                            <div class="sidebar-item tags">
                                <ul>
                                    <li><a href="#">Ferretería</a></li>
                                    <li><a href="#">Plomería</a></li>
                                    <!--<li><a href="#">Business</a></li>
                                    <li><a href="#">Mac</a></li>
                                    <li><a href="#">Design</a></li>
                                    <li><a href="#">Office</a></li>
                                    <li><a href="#">Creative</a></li>
                                    <li><a href="#">Studio</a></li>
                                    <li><a href="#">Smart</a></li>
                                    <li><a href="#">Tips</a></li>
                                    <li><a href="#">Marketing</a></li>-->
                                </ul>
                            </div>
                            <!-- Final de etiquetas -->

                        </div>
                        <!-- Fin del sidebar -->

                    </div>
                    <!-- Fin de barra lateral de búsqueda -->
                </div>
                <div class="row">
                    <!-- Despliegue de productos -->
                    <?php foreach ($result as $item):?>
                    <div class="col-lg-12 entries">
                        <form class="form-product php-email-form" name="form-data-materials" method="get" action="php_forms/add-product-to-cart.hphp">
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
                                    <input class="select-amount text-center" type="number" min="1" max="99" name="sale_amount" value="1">
                                    <button type="button" id="" class="button-product button-more">+</button>
                                </div>
                            </div>
                            <button class="button-product" type="submit" name="button_product">
                                <i class="fi fi-sr-shopping-cart-add icon-add-product"></i>
                            </button>
                        </form>
                    </div>
                    <?php endforeach;?>
                    <!-- Fin de la consulta de productos -->
                </div>

            </div>
        </section>
        <!-- Fin de la sección de productos -->
    </main>
    <?php include_once './php_include/footer_content.hphp'?>
    <?php include_once './php_include/scripts_content.hphp'?>
    <script src="js/inc_dec_buttons.js"></script>
</body>
</html>
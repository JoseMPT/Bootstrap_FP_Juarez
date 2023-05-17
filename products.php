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
                    <div class="col-lg-4">
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
                                    <li><a href="#">General <span>(25)</span></a></li>
                                    <li><a href="#">Lifestyle <span>(12)</span></a></li>
                                    <li><a href="#">Travel <span>(5)</span></a></li>
                                    <li><a href="#">Design <span>(22)</span></a></li>
                                    <li><a href="#">Creative <span>(8)</span></a></li>
                                    <li><a href="#">Educaion <span>(14)</span></a></li>
                                </ul>
                            </div>
                            <!-- Fin de categorías -->

                            <h3 class="sidebar-title">Recent Posts</h3>
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

                            </div>
                            <!-- Fin de productos recientes -->

                            <h3 class="sidebar-title">Etiquetas</h3>
                            <div class="sidebar-item tags">
                                <ul>
                                    <li><a href="#">App</a></li>
                                    <li><a href="#">IT</a></li>
                                    <li><a href="#">Business</a></li>
                                    <li><a href="#">Mac</a></li>
                                    <li><a href="#">Design</a></li>
                                    <li><a href="#">Office</a></li>
                                    <li><a href="#">Creative</a></li>
                                    <li><a href="#">Studio</a></li>
                                    <li><a href="#">Smart</a></li>
                                    <li><a href="#">Tips</a></li>
                                    <li><a href="#">Marketing</a></li>
                                </ul>
                            </div>
                            <!-- Final de etiquetas -->

                        </div>
                        <!-- Fin del sidebar -->

                    </div>
                    <!-- Fin de barra lateral de búsqueda -->

                    <div class="col-lg-8 entries">
                        <form class="form-product php-email-form" name="form-data-materials" method="get" action="user_add_shoppingCart.php">
                            <input class="product-id" type="hidden" name="product_Id" value="1">
                            <i class="fi fi-sr-box-open icon-product"></i>
                            <!--<img class="icon_products" src="icons/product.svg" alt="product">-->
                            <div class="div-product-data">
                                <h3 class="product-name">Martillo</h3>
                                <p class="product-description">Un martillo de hierro</p>
                                <p class="product-description">Precio: $600</p>
                                <p class="product-description">
                                    <label for="select-amount">Cantidad a comprar: </label>
                                    <input id="select-amount" type="number" min="1" max="99" name="sale_amount" value="1">
                                </p>
                            </div>
                            <button class="button-product" type="submit" name="button_product">
                                <i class="fi fi-sr-shopping-cart-add icon-add-product"></i>
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </section>
        <!-- Fin de la sección de productos -->
    </main>
    <?php include_once './php_include/footer_content.hphp'?>
    <?php include_once './php_include/scripts_content.hphp'?>
</body>
</html>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<?php include 'php_include/head_content.hphp'?>

<body>

    <!-- ======= Header ======= -->
    <?php include 'php_include/header_content.hphp'?>
    <!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs" id="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Contáctanos</h2>
                    <ol>
                        <li><a href="index.php">Inicio</a></li>
                        <li>Contacto</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Contact Section ======= -->
        <section class="contact" id="contact">
            <div class="container">

                <div>
                    <!--<iframe allowfullscreen
                            frameborder="0"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" style="border:0; width: 100%; height: 270px;"></iframe>-->
                    <iframe src="https://www.google.com/maps/embed?pb=!4v1684981999413!6m8!1m7!1sDtXDtvuRNFO5r1awbITMrQ!2m2!1d19.6886321240918!2d-100.5346297590831!3f355.0345614486105!4f-17.683925364180894!5f0.7820865974627469" width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="row mt-5">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Ubicación:</h4>
                                <p>Av. Juárez Ote. N° 324, Tierras Coloradas, Ciudad Hidalgo, Michoacán</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Correo electrónico:</h4>
                                <p>ferrejuarez324@hotmail.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Llama a:</h4>
                                <p>+52 1 786 154 3313</p>
                                <p>+52 1 786 129 8126</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">

                        <form id="form-comments" class="php-email-form" method="post" role="form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="name"></label>
                                    <input class="form-control" id="name" name="name" placeholder="Nombre"
                                           required type="text">
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <label for="email"></label>
                                    <input class="form-control" id="email" name="email" placeholder="Correo electrónico"
                                           required type="email">
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <label for="subject"></label>
                                <input class="form-control" id="subject" name="subject" placeholder="Asunto"
                                       required type="text">
                            </div>
                            <div class="form-group mt-3">
                                <label for="message"></label>
                                <textarea id="message" class="form-control" name="message" placeholder="Comentarios" required
                                          rows="5"></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading"></div>
                                <div class="error-message">Error, inténtelo más tarde</div>
                                <div class="sent-message">Tus comentarios han sido enviados. ¡Gracias!</div>
                            </div>
                            <div class="text-center">
                                <button type="submit" id="button-comments">Enviar comentarios<i class="fi fi-sr-paper-plane"></i></button>
                            </div>
                        </form>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include 'php_include/footer_content.hphp'?>
    <!-- End Footer -->

    <?php include 'php_include/scripts_content.hphp'?>
    <script src="js/send-comments.js"></script>
</body>

</html>
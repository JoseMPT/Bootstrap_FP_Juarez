<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<?php include_once 'php_include/head_content.hphp'?>
<body>
<?php include_once 'php_include/header_content.hphp'?>

<main>
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs" id="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Eco-Web</h2>
                <ol>
                    <li><a href="index.php">Home</a></li>
                    <li>Eco-Web</li>
                </ol>
            </div>

        </div>
    </section>
    <!-- End Breadcrumbs -->

    <section class="blog" id="blog">
        <div class="container text-center">
            <h2>Por que es responsabilidad de todos...</h2>
            <img src="img/Tierra.jpg" alt="" class="img-fluid">
            Imagen de <a href="https://www.freepik.es/vector-gratis/fondo-plano-dia-tierra_23671399.htm#query=medio%20ambiente&position=40&from_view=keyword&track=ais">Freepik</a>
        </div>
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-4">

                    <div class="sidebar">
                        <h5><b>Eco-Web</b>, una forma de ayudar al mundo.</h5>
                        <div>
                            <img src="img/ambiente.jpg" alt="" class="img-fluid">
                            Imagen de <a href="https://www.freepik.es/vector-gratis/salva-concepto-planeta-personas-que-cuidan-tierra_7824979.htm#query=medio%20ambiente&position=0&from_view=keyword&track=ais">Freepik</a>
                        </div>
                        <hr>
                        <div style="margin: 10px 0">
                            <b>Alumnos:</b> <br>
                            Jose Miguel Paniagua Tinajero <br>
                            Brandon Alexis Solís Barrera <br>
                            Jose Gutiérrez Lujano <br><br>
                            <b>Grupo:</b> 076DB <br><br>
                        </div>
                        <hr>
                        <p>
                            Este apartado está hecho para mostrar que todos podemos aportar
                            algo para el cuidado del medio ambiente, pues no es un tema exclusivo para
                            unos cuantos.
                        </p>
                        <p>
                            Como prueba de ello, a través de la realización de este proyecto, cada uno
                            de los integrates del equipo se comprometió a cuidar una planta a fin de demostrar
                            que no siempre se trata de programar.
                        </p>
                    </div><!-- End sidebar -->
                </div><!-- End blog sidebar -->

                <div class="col-lg-8 entries">

                    <!-- Entrada - Primer mes -->
                    <article class="entry">
                        <h2><b>Primer mes - Febrero</b></h2>
                        <div class="entry-img">
                            <div id="carousel1" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3000">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carousel1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carousel1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carousel1" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    <button type="button" data-bs-target="#carousel1" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                    <button type="button" data-bs-target="#carousel1" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                    <button type="button" data-bs-target="#carousel1" data-bs-slide-to="5" aria-label="Slide 6"></button>
                                </div>

                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="img_ecoweb_miguel/23_1076dDisIntT1Flor1PaniaguaJose1.jpg" class="d-block w-100" alt="">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Planta de Miguel</h5>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img src="img_ecoweb_miguel/23_1076dDisIntT1Flor1PaniaguaJose2.jpg" class="d-block w-100" alt="">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Miguel y su planta</h5>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img src="img_ecoweb_jose/23_1076dDisIntT1Flor1GutierrezJose1.jpg" class="d-block w-100" alt="">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Planta de Jose</h5>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img src="img_ecoweb_jose/23_1076dDisIntT1Flor1GutierrezJose2.jpg" class="d-block w-100" alt="">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Jose y su planta</h5>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img src="img_ecoweb_brandon/23_1076dDisIntT1Flor1SolisBrandon1.jpg" class="d-block w-100" alt="">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Planta de Brandon</h5>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img src="img_ecoweb_brandon/23_1076dDisIntT1Flor1SolisBrandon2.jpg" class="d-block w-100" alt="">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Brandon y su planta</h5>
                                        </div>
                                    </div>
                                </div>

                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>

                        <h3 class="entry-title">
                            Consiguiendo una planta
                        </h3>
                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i>
                                    Se muestra evidencia de la planta y de cada uno de los integrantes.
                                </li>
                            </ul>
                        </div>
                        <div class="entry-content">
                            <p>
                                En este primer mes se planteó la idea de cuidar una planta, pero para ello
                                debía de ser una planta relativamente fácil, dado que a muchos no se nos daba
                                muy bien la jardinería y además para prevenir el desperdicio o derroche de
                                recursos.
                            </p>
                        </div>
                    </article>
                    <!-- Fin del primer mes -->


                    <!-- Entrada - Segundo mes -->
                    <article class="entry">
                        <h2><b>Segundo mes - Marzo</b></h2>
                        <div class="entry-img">
                            <div id="carousel2" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carousel2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carousel2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carousel2" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    <button type="button" data-bs-target="#carousel2" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                    <button type="button" data-bs-target="#carousel2" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                    <button type="button" data-bs-target="#carousel2" data-bs-slide-to="5" aria-label="Slide 6"></button>
                                </div>

                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="img_ecoweb_miguel/23_1076dDisIntT2Flor2PaniaguaJose1.jpg" class="d-block w-100" alt="">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Planta de Miguel</h5>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img src="img_ecoweb_miguel/23_1076dDisIntT2Flor2PaniaguaJose2.jpg" class="d-block w-100" alt="">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Miguel y su planta</h5>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img src="img_ecoweb_jose/23_1076dDisIntT2Flor2GutierrezJose1.jpg" class="d-block w-100" alt="">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Planta de Jose</h5>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img src="img_ecoweb_jose/23_1076dDisIntT2Flor2GutierrezJose2.jpg" class="d-block w-100" alt="">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Jose y su planta</h5>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img src="img_ecoweb_brandon/23_1076dDisIntT2Flor2SolisBrandon1.jpg" class="d-block w-100" alt="">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Planta de Brandon</h5>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img src="img_ecoweb_brandon/23_1076dDisIntT2Flor2SolisBrandon2.jpg" class="d-block w-100" alt="">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Brandon y su planta</h5>
                                        </div>
                                    </div>
                                </div>

                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel2" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel2" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>

                        <h3 class="entry-title">
                            Cuidando la planta
                        </h3>
                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i>
                                    Se muestra evidencia de la planta y de cada uno de los integrantes.
                                </li>
                            </ul>
                        </div>
                        <div class="entry-content">
                            <p>
                                En el segundo mes, vimos cómo algunas plantas crecían o cómo otras empezaban a
                                marchitarse. Aquí nos dimos cuenta de que, no resulta nada fácil estar al pendiente
                                si no conocemos del área.
                                Por fortuna, al menos aquí las plantas estuvieron creciendo bien.
                            </p>
                        </div>
                    </article>
                    <!-- Fin del segundo mes -->


                    <!-- Entrada - Tercer mes -->
                    <article class="entry">
                        <h2><b>Tercer mes - Abril</b></h2>
                        <div class="entry-img">
                            <div id="carousel3" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3000">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carousel3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carousel3" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carousel3" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    <button type="button" data-bs-target="#carousel3" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                    <button type="button" data-bs-target="#carousel3" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                    <button type="button" data-bs-target="#carousel3" data-bs-slide-to="5" aria-label="Slide 6"></button>
                                </div>

                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="img_ecoweb_miguel/23_1076dDisIntT3Flor1PaniaguaJose1.jpg" class="d-block w-100" alt="">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Planta de Miguel</h5>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img src="img_ecoweb_miguel/23_1076dDisIntT3Flor1PaniaguaJose2.jpg" class="d-block w-100" alt="">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Miguel y su planta</h5>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img src="img_ecoweb_jose/23_1076dDisIntT3Flor1GutierrezJose1.jpg" class="d-block w-100" alt="">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Planta de Jose</h5>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img src="img_ecoweb_jose/23_1076dDisIntT3Flor1GutierrezJose2.jpg" class="d-block w-100" alt="">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Jose y su planta</h5>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img src="img_ecoweb_brandon/23_1076dDisIntT3Flor1SolisBrandon1.jpg" class="d-block w-100" alt="">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Planta de Brandon</h5>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img src="img_ecoweb_brandon/23_1076dDisIntT3Flor1SolisBrandon2.jpg" class="d-block w-100" alt="">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Brandon y su planta</h5>
                                        </div>
                                    </div>
                                </div>

                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel3" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel3" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>

                        <h3 class="entry-title">
                            Reemplazando la planta...
                        </h3>
                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i>
                                    Se muestra evidencia de la planta y de cada uno de los integrantes.
                                </li>
                            </ul>
                        </div>
                        <div class="entry-content">
                            <p>
                                En este punto, algunos tuvieron que reemplazar su planta, ya que se les murió,
                                el perro se la comió, entre otras cuantas tragedias.
                                Esto es prueba de que la jardinería y el cuidado ambiental no es para todos...
                                y, sin embargo, tenemos que contribuir a mejorar nuestro hogar:
                                el planeta Tierra, queramos o no.
                            </p>
                        </div>
                    </article>
                    <!-- Fin del tercer mes -->


                    <!-- Entrada - Cuarto mes -->
                    <article class="entry">
                        <h2><b>Cuarto mes - Mayo</b></h2>
                        <div class="entry-img">
                            <div id="carousel4" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3000">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carousel4" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carousel4" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carousel4" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    <button type="button" data-bs-target="#carousel4" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                    <button type="button" data-bs-target="#carousel4" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                    <button type="button" data-bs-target="#carousel4" data-bs-slide-to="5" aria-label="Slide 6"></button>
                                </div>

                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="img_ecoweb_miguel/23_1076dDisIntT4Flor3PaniaguaJose1.jpg" class="d-block w-100" alt="">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Planta de Miguel</h5>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img src="img_ecoweb_miguel/23_1076dDisIntT4Flor3PaniaguaJose2.jpg" class="d-block w-100" alt="">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Miguel y su planta</h5>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img src="img_ecoweb_jose/23_1076dDisIntT4Flor3GutierrezJose1.png" class="d-block w-100" alt="">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Planta de Jose</h5>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img src="img_ecoweb_jose/23_1076dDisIntT4Flor3GutierrezJose2.jpg" class="d-block w-100" alt="">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Jose y su planta</h5>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img src="img_ecoweb_brandon/23_1076dDisIntT4Flor3SolisBrandon1.jpg" class="d-block w-100" alt="">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Planta de Brandon</h5>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img src="img_ecoweb_brandon/23_1076dDisIntT4Flor3SolisBrandon2.jpg" class="d-block w-100" alt="">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Brandon y su planta</h5>
                                        </div>
                                    </div>
                                </div>

                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel4" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel4" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>

                        <h3 class="entry-title">
                            Reflexionando sobre la actividad
                        </h3>
                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i>
                                    Se muestra evidencia de la planta y de cada uno de los integrantes.
                                </li>
                            </ul>
                        </div>
                        <div class="entry-content">
                            <p>
                                Llegamos a lo que es el último mes y las preguntas son muchas. ¿Esto para qué?
                                ¿En qué nos beneficia esto?, entre otras. Bueno, pues llegamos a la conclusión de que
                                no se trata del "para qué" sino del "por qué", actualmente nos vemos envueltos en
                                nuestras actividades cotidianas por lo que no nos damos a la tarea de
                                contribuir al cuidado ambiental. Aunque se trate de una simple planta, esta se
                                multiplica por cada uno de los participantes y esto propicia un mejor entorno
                                para todos. Además, nos ayuda a ser responsables y conscientes de lo que implica
                                el cuidado del medio ambiente, pues esto es tarea de todos, no solo de unos.
                            </p>
                        </div>
                    </article>
                    <!-- Fin del cuarto mes -->
                </div>
                <!-- End blog entries list -->
            </div>
        </div>
    </section>
</main>

<?php include_once 'php_include/footer_content.hphp'?>
<?php include_once 'php_include/scripts_content.hphp'?>
</body>
</html>
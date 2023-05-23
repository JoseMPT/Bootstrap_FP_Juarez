<!DOCTYPE html>
<html lang="es">
<?php include 'php_include/head_content.hphp'?>
<body>
    <?php include 'php_include/header_content.hphp'?>
    <main id="main-register" class="container-fluid">
        <br><br><br>
        <section id="fondo" class="container col-lg-4 col-md-6 col-sm-8">
            <form id="form-register" method="post" spellcheck="true" class="php-email-form" role="form">
                <div class="text-center"><h2 class="text-center title">Registro de nuevo usuario</h2></div>
                <section class="form-group">
                    <label for="name1" class="form-label">Primer nombre:</label>
                    <input type="text" name="text_name1" id="name1" class="form-control" placeholder="Nombre"
                           minlength="3" maxlength="40" required>
                </section>
                <section class="form-group">
                    <label for="name2" class="form-label col-lg-4">Segundo nombre (Opcional):</label>
                    <input type="text" name="text_name2" id="name2" class="form-control" placeholder="Nombre"
                           minlength="3" maxlength="40">
                </section>
                <section class="form-group">
                    <label for="lastname1" class="form-label col-lg-4">Primer apellido:</label>
                    <input type="text" name="text_lastname1" id="lastname1" class="form-control" placeholder="Primer apellido"
                           minlength="3" maxlength="40" required>
                </section>
                <section class="form-group">
                    <label for="lastname2" class="form-label col-lg-4">Segundo apellido (Opcional):</label>
                    <input type="text" name="text_lastname2" id="lastname2" class="form-control" placeholder="Segundo apellido"
                           minlength="3" maxlength="40">
                </section>
                <section class="form-group">
                    <label for="email" class="form-label col-lg-4">Correo electrónico:</label>
                    <input type="email" name="text_email" id="email" class="form-control" placeholder="email@example.com"
                           minlength="3" maxlength="40" required>
                </section>
                <section class="form-group">
                    <label for="pass" class="form-label col-lg-4">Contraseña:</label>
                    <input type="password" name="text_pass" id="pass" class="form-control" placeholder="Contraseña"
                           minlength="8" maxlength="50" required>
                </section>
                <div class="my-3">
                    <div class="loading">Registrando...</div>
                    <div class="error-message">Ha ocurrido un error, vuelva a intentarlo más tarde.</div>
                    <div class="sent-message">Registro exitoso.</div>
                </div>
                <div class="text-center">
                    <button type="submit" id="submit-register">Registrarse</button>
                </div>
            </form>
        </section>
        <br><br><br>
    </main>

    <?php include 'php_include/footer_content.hphp'?>
    <?php include 'php_include/scripts_content.hphp'?>
</body>
</html>
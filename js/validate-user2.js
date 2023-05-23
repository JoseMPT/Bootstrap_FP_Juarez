$(document).ready(function (){
    $('#form-login').on('submit', function () { // Nos suscribimos al evento "submit" de nuestro formulario el cual se lanzara al hacer clic en un botón del tipo submit
        dataToSend = $(this).serialize(); //Aquí ya tenemos el contexto del formulario por eso usamos $(this)

        // Después hacemos el $.ajax
        $.ajax({
            method: 'POST', // Método a utilizar POST, GET, etc...
            url: 'php_forms/account-verification.hphp', // URL de la página que recibirá la petición
            data: dataToSend, // Aquí van los datos a enviar, en este caso serializamos los campos del formulario y los asignamos a esta variable por eso solo ponemos esta variable
            success: function (data) {
                // Este callback que se lanzara si la url 'myPage.php' responde como un status 200: OK, y lo que imprimas en php lo cachara en la variable data.
                console.log(data.response)
            },
            error: function (data) {
                // Este callback que se lanzara si la url 'myPage.php' responde con status de error, e.g. 400, 404, 500, etc...
                console.log(data.response)
            }
        });

        return false; // Este return es para que no se lance el evento submit al navegador y no brinque de página, sino que se queda esperando la respuesta de nuestra llamada ajax.
    });

});
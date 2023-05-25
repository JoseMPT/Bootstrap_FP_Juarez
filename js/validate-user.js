$(document).ready(function (){
    let formLogin =  $('#form-login')
    let formQuit = (event) =>{
        event.preventDefault()
    }

    function validarCorreo(correo) {
        // Expresión regular para validar el correo electrónico
        let expression = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        // Utiliza el método test() de la expresión regular para verificar si el correo es válido
        return expression.test(correo);
    }


    formLogin.on('submit', formQuit)
    let inputEmail = $('#email')
    let inputPass = $('#pass')

    let loginButton = $('#login-button')

    let loading = $('.loading')
    let error = $('.error-message')
    let message = $('.sent-message')

    let loginAccount = () =>{
        if (inputEmail.val() === '') return
        if (!validarCorreo(inputEmail.val())){
            loading.removeClass('d-block')
            error.html('<b>Ingrese una dirección de correo válida.</b>')
            error.addClass('d-block')
            setTimeout(()=>{error.removeClass('d-block')}, 4000)
            return
        }
        if (inputPass.val() === '') return
        let url = 'php_forms/account-verification.php';
        let form = new FormData()
        form.append(inputEmail.attr('name'), inputEmail.val())
        form.append(inputPass.attr('name'), inputPass.val())
        let req = new XMLHttpRequest()
        req.addEventListener('loadstart', loadingAccount)
        req.addEventListener('load', show)
        req.open('POST', url, true)
        req.send(form)
    }

    let redirect = () =>{
        window.location.replace('./index.php')
    }
    let loadingAccount = () =>{
        loading.addClass('d-block')
    }
    let show = (event) =>{
        let data = event.target
        let result = data.responseText

        if (data.status === 200){
            if (result === 'Failed'){
                loading.removeClass('d-block')
                error.html('<b>Usuario o contraseña incorrecta.</b>')
                error.addClass('d-block')
                setTimeout(()=>{error.removeClass('d-block')},4000)
            }else{
                loading.removeClass('d-block')
                error.removeClass('d-block')
                message.html('<b>Verificado</b>')
                message.addClass('d-block')
                setTimeout(redirect, 500)
            }
        }
    }

    loginButton.click(loginAccount)
});
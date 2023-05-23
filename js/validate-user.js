$(document).ready(function (){
    let formLogin =  $('#form-login')
    let formQuit = (event) =>{
        event.preventDefault()
    }
    formLogin.on('submit', formQuit)

    let loginButton = $('#login-button')

    let inputEmail = $('#email')
    let inputPass = $('#pass')

    let loading = $('.loading')
    let error = $('.error-message')
    let message = $('.sent-message')

    let loginAccount = () =>{
        let url = 'php_forms/account-verification.hphp';
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
        //console.log(result)
        if (data.status === 200){
            if (result === 'Failed'){
                loading.removeClass('d-block')
                error.html('<b>Usuario o contraseña incorrecta.</b>')
                error.addClass('d-block')
                formLogin[0].reset()
            }else{
                loading.removeClass('d-block')
                error.removeClass('d-block')
                message.html('<b>Verificado</b>')
                message.addClass('d-block')
                setTimeout(redirect, 500)
            }
        }else{
            message.html('<b>Verificado</b>')
            message.toggleClass('d-block')
        }
    }

    loginButton.click(loginAccount)
});
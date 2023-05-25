$(document).ready(function (){
    let formData =  $('#form-register')
    let formQuit = (event) =>{
        event.preventDefault()
    }
    formData.on('submit', formQuit)

    let submitButton = $('#submit-register')

    let loading = $('.loading')
    let error = $('.error-message')
    let message = $('.sent-message')

    let name1 = $('#name1')
    let name2 = $('#name2')
    let lastname1 = $('#lastname1')
    let lastname2 = $('#lastname2')
    let email = $('#email')
    let pass = $('#pass')

    let submit = () =>{
        if (name1.val() === '') return
        //if (name2.val() === '') return
        if (lastname1.val() === '') return
        //if (lastname2.val() === '') return
        if (email.val() === '') return
        if (pass.val() === '' || pass.val().length < 8) return
        let url = 'php_forms/new-account.php';
        let virtualForm = new FormData()
        virtualForm.append(name1.attr('name'), name1.val())
        virtualForm.append(name2.attr('name'), name2.val())
        virtualForm.append(lastname1.attr('name'), lastname1.val())
        virtualForm.append(lastname2.attr('name'), lastname2.val())
        virtualForm.append(email.attr('name'), email.val())
        virtualForm.append(pass.attr('name'), pass.val())
        let req = new XMLHttpRequest()
        req.addEventListener('loadstart', loadingProgress)
        req.addEventListener('load', showMessage)
        req.open('POST', url, true)
        req.send(virtualForm)
    }

    let loadingProgress = () =>{
        loading.addClass('d-block')
    }

    let redirect = () =>{
        window.location.replace('./loggin.php')
    }
    let showMessage = (event) =>{
        let data = event.target
        console.log(data.responseText)
        if (data.status === 200){
            if (data.responseText === 'Failed'){
                loading.removeClass('d-block')
                error.html('<b>El correo electrónico ya está en uso, pruebe con otro.</b>')
                error.addClass('d-block')
                setTimeout(()=>{error.removeClass('d-block')}, 4000)
            }else{
                loading.removeClass('d-block')
                error.removeClass('d-block')
                message.html('<b>Registro exitoso.</b>')
                message.addClass('d-block')
                setTimeout(redirect, 500)
            }
        }
    }

    submitButton.click(submit)
});
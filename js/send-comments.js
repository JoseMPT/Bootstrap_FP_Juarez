$(document).ready(()=>{
    let formComments =  $('#form-comments')
    formComments.on('submit', (e)=>{e.preventDefault()})
    let validarCorreo = (correo) => {
        // Expresión regular para validar el correo electrónico
        let expression = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        // Utiliza el método test() de la expresión regular para verificar si el correo es válido
        return expression.test(correo);
    }
    let name = $('#name')
    let email = $('#email')
    let subject = $('#subject')
    let message = $('#message')
    let sending = $('.loading')
    let error = $('.error-message')
    let success = $('.sent-message')
    let sendComments = () =>{
        if (name.val() === '') return
        if (email.val() === '') return
        if (!validarCorreo(email.val())){
            sending.removeClass('d-block')
            error.html('<b>Ingrese una dirección de correo válida.</b>')
            error.addClass('d-block')
            setTimeout(()=>{error.removeClass('d-block')}, 3000)
            return
        }
        if (subject.val() === '') return
        if (message.val() === '') return
        let url = 'php_forms/send-comments.php'
        let form = new FormData()
        form.append(name.attr('name'), name.val())
        form.append(email.attr('name'), email.val())
        form.append(subject.attr('name'), subject.val())
        form.append(message.attr('name'), message.val())
        let req = new XMLHttpRequest()
        req.addEventListener('loadstart', ()=>{sending.addClass('d-block')})
        req.addEventListener('load', (e)=>{
            let data = e.target
            let res = data.responseText
            if (data.status === 200){
                if (res === 'Failed'){
                    sending.removeClass('d-block')
                    error.html('<b>Ingrese una dirección de correo válida.</b>')
                    error.addClass('d-block')
                }else{
                    error.removeClass('d-block')
                    sending.removeClass('d-block')
                    success.addClass('d-block')
                    formComments[0].reset();
                    setTimeout(()=>{success.removeClass('d-block')}, 3000)
                }
            }else{
                sending.removeClass('d-block')
                error.addClass('d-block')
                setTimeout(()=>{error.removeClass('d-block')}, 3000)
            }
        })
        req.open('POST', url, true)
        req.send(form)
    }

    let buttonComments = $('#button-comments')
    buttonComments.click(sendComments)
});
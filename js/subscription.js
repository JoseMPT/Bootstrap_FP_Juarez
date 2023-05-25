$(document).ready(()=>{
    let formSubs = $('#form-subs');
    formSubs.on('submit',(e)=>{e.preventDefault()})

    let buttonSubs = $('#button-subs')
    let inputSubs = $('#input-subs')

    function validarCorreo(correo) {
        // Expresión regular para validar el correo electrónico
        let expression = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        // Utiliza el método test() de la expresión regular para verificar si el correo es válido
        return expression.test(correo);
    }

    let send = () =>{
        if (inputSubs.val() === '') return
        if (!validarCorreo(inputSubs.val())) return
        let url = 'php_forms/subscription.php'
        let form = new FormData()
        form.append(inputSubs.attr('name'), inputSubs.val())
        let req = new XMLHttpRequest()
        req.addEventListener('load', showRes)
        req.open('POST', url, true)
        req.send(form)
    }
    let showRes = (event) =>{
        let data = event.target
        let res = data.responseText
        if (data.status === 200){
            if (res === 'Failed'){
                alert('Error de subscripción. Pruebe más tarde')
            }else{
                formSubs[0].reset()
            }
        }
    }
    buttonSubs.click(send)
});
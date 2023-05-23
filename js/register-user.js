$(document).ready(function (){
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
        let url = 'php_forms/new-account.hphp';
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
        loading.toggleClass('d-block')
    }

    let showMessage = (event) =>{
        let data = event.target
        if (data.status === 200){
            loading.toggleClass('d-block')
            message.toggleClass('d-block')
        } else{
            error.toggleClass('d-block')
        }
    }

    submitButton.click(submit)
});
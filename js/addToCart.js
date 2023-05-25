$(document).ready(function () {
    let productForm = $('.form-product')
    let quit = (e)=>{e.preventDefault()}
    productForm.on('submit', quit)

    let loading = $('.loading')
    let error = $('.error-message')
    let message = $('.sent-message')

    let buttonAdd = $('.add-button')
    /*let idProduct = $('.product-id')
    let amount = $('.select-amount')*/

    let sendData = (event) =>{
        let button; let inputID; let amount;
        let loading; let successful; let error;
        if (event.target.tagName !== 'I'){
            button = $(event.target)
        }else{
            button = $(event.target).parent()
        }
        inputID = $($(button).siblings().eq(0))
        let divData = $(button).siblings().eq(2)
        let divDescription = $(divData).children().eq(3)
        amount = $(divDescription).children().eq(2)

        let divMessages = $(button).siblings().eq(3)
        loading = $(divMessages).children().eq(0)
        error = $(divMessages).children().eq(1)
        successful = $(divMessages).children().eq(2)

        let url = 'php_forms/add-product-to-cart.php'
        let formData = new FormData()
        formData.append(inputID.attr('name'), inputID.val())
        formData.append(amount.attr('name'), amount.val())
        let req = new XMLHttpRequest()
        req.addEventListener('loadstart', ()=>{
            loading.addClass('d-block')
        })
        req.addEventListener('load', (event)=>{
            let data = event.target
            let result = data.responseText
            if (data.status === 200){
                if (result === 'Failed'){
                    window.location.replace('./loggin.php')
                    loading.removeClass('d-block')
                }else{
                    loading.removeClass('d-block')
                    successful.addClass('d-block')
                    setTimeout(()=>{successful.removeClass('d-block')}, 1500)
                }
            }
        })
        req.open('POST', url, true)
        req.send(formData)
    }

    buttonAdd.on('click', sendData)
});
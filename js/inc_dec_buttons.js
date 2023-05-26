$(document).ready(function () {
    let buttonLess = $('.button-less')
    let buttonMore = $('.button-more')
    let inputAmount = $('.select-amount')
    let inc = (event) =>{
        let button = event.target
        let input = $(button).prev()
        // let price = $(input.parent()).siblings().eq(2)
        // console.log(price)
        if (input.val() < 99) input.val(parseInt(input.val())+1)
    }
    let dec = (event) =>{
        let button = event.target
        let input = $(button).next()
        if(input.val() > 1) input.val(parseInt(input.val())-1)
    }

    let amount = (event) =>{
        let input = $(event.target)
        if (input.val() === '') input.val(1)
    }

    buttonLess.on('click', dec)
    buttonMore.on('click', inc)
    inputAmount.on('change', amount)
});
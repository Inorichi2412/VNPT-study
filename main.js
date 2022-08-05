// slider
// const productItem = document.querySelectorAll('.product')
// const prevBtn = document.querySelector('.prev-btn')
// const nextBtn = document.querySelector('.next-btn')

// productItem.forEach((item, i) => {
//     let productner = item.getBoundingClientRect();
//     let productWidth = productner.width;

// });
// nextBtn[i].addEvenListenner('click', () => {
//     item.scrollLeft += productWidth;
// })

// prevBtn[i].addEvenListenner('click', function(){
//     item.scrollLeft -= productWidth;
// });

//modal-login

const btnOpen = document.querySelector('.header__navbar-login')
const modal = document.querySelector('.modal__login')
const btnclose = document.querySelector('.modal__can-button')
const iconClose = document.querySelector('.modal__icon-close')

function toggleModal(){
    modal.classList.toggle('hide')
}

btnOpen.addEventListener('click', function(){
    modal.classList.remove('hide')
})
iconClose.addEventListener('click', toggleModal)
btnclose.addEventListener('click', toggleModal)
modal.addEventListener('click', function(e){
    if(e.target == e.currentTarget){
        toggleModal()
    }
})


//modal-sign
const btnsign = document.querySelector('.header__navbar-sign')
const btnCancel = document.querySelector('.modal__sign-footer a')
const modalSign = document.querySelector('.modal__sign')

function toggleSign(){
    modalSign.classList.toggle('hide')
}

btnsign.addEventListener('click', function(){
    modalSign.classList.remove('hide')
})
btnCancel.addEventListener('click', toggleSign)
modalSign.addEventListener('click', function(e){
    if(e.target == e.currentTarget){
        toggleSign()
    }
})
document.addEventListener('keydown', function(e){
    if(e.keyCode == 27){
        toggleSign()
    }
})

// .......................slide.............................
// const slideChang = document.querySelector('.content__image-slide img')

index = 1
 slideChang = function(){
    var imgs = [
        "./assets/img/Banner2.png",
        "./assets/img/Banner1.png"
    ]
    document.querySelector('.content__image-img').src = imgs[index]
    index++;
    if(index == 2) {
        index = 0;
    }
    setTimeout(slideChang,3000)
}


//.......................form__cart.......................................
const openProduct = document.querySelector('.header__navbar-cart')
const cartClose = document.querySelector('.cart__icon-close')
const cartModal = document.querySelector('.product__cart')


openProduct.addEventListener('click', function(){
    cartModal.classList.remove('hide')
})
cartClose.addEventListener('click', function(){
    cartModal.classList.add('hide')
})


/*..............................product__cart..................................*/
const btnProduct = document.querySelectorAll('.product__price-list .product__btn')

btnProduct.forEach((item, index)=> {
    item.addEventListener('click', function(e){
        var btnItem = e.target
        var product = btnItem.parentElement
        // console.log(product)
        var productImg = product.querySelector('.product__price-list img').src
        var productName = product.querySelector('.product__price-list h3').innerText
        var productPrice = product.querySelector('.price span').innerText
        // console.log(productPrice)
        // console.log(productImg)

        cartAdd(productImg, productName, productPrice)
    })
})

function cartAdd(productImg, productName, productPrice) {
    const addtr = document.createElement('tr')
    addtr.innerHTML = '<tr><td><img src="'+productImg+'" alt=""">'+productName+'</td><td><span class="prices">'+productPrice+'</span></td><td><input type="number" value="1" min="1"></td><td><span class="cart-delete">Xóa</span></td></tr>'
    
    
    var cartTable = document.querySelector('tbody')
    cartTable.appendChild(addtr)
    // cartTotal()
    cartDelete()
}
//..................... Tính tổng.......................
function cartTotal(){
    var cartItem = document.querySelectorAll('tbody tr')

    var totalB = 0
    for(var i=0; i < cartItem.length; i++){
        var productPrice = cartItem[i].querySelector('.price span').innerText
        console.log(productPrice)
        var inputValue = cartItem[i].querySelector('tbody input').value
        console.log(inputValue)
        var totalA = productPrice*inputValue
        totalB = totalB + totalA
        // console.log(totalA)

    }
    var totalC = document.querySelector('.product__cart-price-total span')
    totalC.innerHTML = totalB
    totalC = totalB + totalA
}

// cartDelete.................................
function cartDelete(){
    var cartItem = document.querySelectorAll('.cart-delete')
    for(var i=0; i < cartItem.length; i++){
        cartItem[i].addEventListener('click', function(e){
            var deleteItem = e.target
            var deleteCart = deleteItem.parentElement.parentElement
            deleteCart.remove()
        })
    }
}



//show
const progress = document.querySelector('.progress-done');

setTimeout(() => {
  progress.style.opacity = 1;
  progress.style.width = progress.getAttribute('data-done') + '%';
}, 2000)
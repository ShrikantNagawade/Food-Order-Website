if (document.readyState == "loading") {
    document.addEventListener("DOMContentLoaded", ready)
} else {
    ready()
}

function ready() {
    var removeCartButton = document.getElementsByClassName("remove");
    // console.log(removeCartButton)
    for (var i = 0; i < removeCartButton.length; i++) {
        var button = removeCartButton[i];
        button.addEventListener("click",removeCartItem) 
    }

    var quantityInputs = document.getElementsByClassName("cart-quantity-input")
    for (var i = 0; i < quantityInputs.length; i++) {
        var input = quantityInputs[i]
        input.addEventListener("change",quantityChanged)
    }

    var addToCart = document.getElementsByClassName("add-to-cart")
    for (var i = 0; i < addToCart.length; i++) {
        var button = addToCart[i]
        button.addEventListener("click", addToCartClicked)
    }   

    locate();
}

var cart = [];
    var cart_total = 0;
function updateCart_add(name, price, image ){
    var item = {};
    item.name = name;
    item.price = price;
    item.image = image;
    item.Quantity = 1;
    cart.push(item);
  
}
function locate(){
    document.getElementById('order').onclick = function(){
        var carts = cart;
        var cart_totals = cart_total;
       localStorage.setItem('carts',JSON.stringify(carts));
       localStorage.setItem('cart_totals',cart_totals);
    //    for(var i=0;i<cart.length;i++){
    //        console.log(cart[i]);
    //    }
        location.href = "./receipt.php";
    }
}
function updateCart_remove(event)
{   var rem = event.target;
    console.log(rem.parentNode.parentNode.getElementsByClassName('cart-item-title')[0].innerText);
    rem = rem.parentNode.parentNode.getElementsByClassName('cart-item-title')[0].innerText;
    for(var i=0;i<cart.length;i++)
    {
        if(cart[i].name == rem){
            
            var index = i;
            break;
        }
    }
    cart.splice(index,1);
   
}

function addToCartClicked(event) {
    var button = event.target
    var product = button.parentNode.parentNode.parentNode
    var productName = product.getElementsByClassName("product-name")[0].innerText
    var productPrice = product.getElementsByClassName("product-price")[0].innerText.replace("Price \u20b9",'')
    productPrice = parseFloat(productPrice)
    var productImage = product.getElementsByClassName("product-img")[0].src
    // console.log(productImage, productName, productPrice)
    addItemToCart(productName, productPrice, productImage);
    UpdateCartTotal();
}

function addItemToCart(name, price, image) {
    var cartRow = document.createElement('div');
    cartRow.classList.add('cart-row')
    var cartItems = document.getElementsByClassName('cart-items')[0]
    
    var cartItemTitles = document.getElementsByClassName('cart-item-title')

    for (var i = 0; i < cartItemTitles.length; i++) {
        if (cartItemTitles[i].innerText == name) {
            alert("This item is already added to the cart!!")
            return
        }
    }
    var cartRowContents = `
                <div class="cart-item cart-column">
                      <img src="${image}" />
                      <span class="cart-item-title">${name}</span>
                  </div>
                  <span class="cart-price cart-column price">&#8377;${price}</span>
                  <div class="cart-quantity cart-column">
                      <input class="cart-quantity-input" type="number" value="1">
                      <button class="btn remove" type="button">REMOVE</button>
                  </div>
 `
    cartRow.innerHTML = cartRowContents
    cartItems.append(cartRow)
    cartRow.getElementsByClassName("remove")[0].addEventListener("click", removeCartItem)
    cartRow.getElementsByClassName("cart-quantity-input")[0].addEventListener("change",quantityChanged)
    updateCart_add(name,price,image);
}

function quantityChanged(event) {
    var input = event.target
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1;
    }

    var quantity_cart_name = event.target.parentNode.parentNode.getElementsByClassName('cart-item-title')[0].innerText;
    for(var i=0;i<cart.length;i++)
    {
        if(cart[i].name == quantity_cart_name)
        {
            cart[i].Quantity = input.value;
        }
    }

    UpdateCartTotal();
}
function removeCartItem(event) {
    var buttonClicked = event.target;
    buttonClicked.parentNode.parentNode.remove();
    UpdateCartTotal();
}

function UpdateCartTotal() {
    var cartItemContainer = document.getElementsByClassName("cart-items")[0];
    var cartRows = cartItemContainer.getElementsByClassName("cart-row");
    var total = 0;
    for (var i = 0; i < cartRows.length; i++) {
        var cartRow = cartRows[i];
        var priceElement = cartRow.getElementsByClassName("cart-price")[0];
        var quantityElement = cartRow.getElementsByClassName("cart-quantity-input")[0];
        var price = parseFloat(priceElement.innerText.replace("\u20b9", ''))
        var quantity = quantityElement.value
       
        total = total + (price * quantity);
    }
    total = Math.round(total * 100) / 100
    document.getElementsByClassName("cart-total-price")[0].innerText = "\u20b9" + total;
    cart_total = total;
}

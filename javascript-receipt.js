if (document.readyState == "loading") {
    document.addEventListener("DOMContentLoaded", ready)
} else {
    ready()
   
}
function ready(){

var Cart = JSON.parse(localStorage.getItem('carts'));
var Cart_total = localStorage.getItem('cart_totals');
for (var i=0;i<Cart.length;i++)
{
    console.log(Cart[i].name, Cart[i].price);
}
console.log(Cart_total);

for(var i=0;i<Cart.length;i++)
{
    var newRow = document.createElement('div');
    newRow.classList.add('content-item') 
    var Item = document.getElementsByClassName('receipt-content')[0];
    newRowContent = `<div class="content-item">
    <span class="item title">${Cart[i].name}</span>
    <span class="item title">&#8377; ${Cart[i].price} X ${Cart[i].Quantity}</span>
</div>`;
    
   newRow.innerHTML = newRowContent;
   Item.appendChild(newRow);
}
var total = document.getElementsByClassName('item-total')[0];
console.log(total);
total.innerHTML = `Total: &#8377 ${Cart_total}`;
}


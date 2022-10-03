//Ref: https://www.youtube.com/watch?v=UcrypywtAm0 and https://github.com/CodeExplainedRepo/shopping-cart-javascript
//SELECT ELEMENTS
const productsEl = document.querySelector(".products");
const cartItemsEl =document.querySelector(".cart-items");
const subtotalEl = document.querySelector(".subtotal");
const totalItemsInCartEl = document.querySelector(".total-items-in-cart");

//CART ARRAY
let cart = []
//ADD TO CART
function addToCart(id) {
    //check if product already exist in cart
    if(cart.some((item)=>item.id ===id)){
        alert("Product already in the cart!")
    }
    else{
    const item = products.find((product) => product.id === id);

    cart.push({
        ...item,
        numberOfUnits: 1,
    });

    }

    updateCart();
}
// update cart
function updateCart(){
    renderCartItems();
    renderSubTotal();
}

function renderSubTotal(){
    let totalPrice = 0, totalItems = 0;

    cart.forEach((item) =>{
        totalPrice += item.price * item.numberOfUnits;
        totalItems += item.numberOfUnits;
    });

    subtotalEl.innerHTML = `Subtotal (${totalItems} items): ${totalPrice.toFixed(2)}&#x20BA;`;
    totalItemsInCartEl.innerHTML = totalItems;

}
function renderCartItems(){
        cartItemsEl.innerHTML =""; //clear cart element  
    cart.forEach((item)=> {
        cartItemsEl.innerHTML +=`
            <div class="cart-item" style="display: flex; justify-content: space-around; padding: 10px 0; display: flex; align-items: center; justify-content: center;">
                <div class="item-info" onclick="removeItemFromCart(${item.id})" style="flex: 1; background-color: rgba(255, 255, 255, 0.6); border-radius: 0 10px 10px 0; padding: 10px; ">
                    <h4 style="font-size: 20px; alling: center;">${item.name}</h4>
                </div>
                <div class="unit-price" style="flex: 1; font-size: 1.2rem;">
                    ${item.price}<small>&#x20BA;</small>
                </div>
                <div class="units" style="flex: 1;">
                    <div class="row">
                        <div class="col-sm">
                        <div class="btn minus" onclick="changeNumberOfUnits('minus',${item.id})" style="  width: 20px;
                        height: 20px;
                    
                        font-weight: bold;
                    
                        cursor: pointer;">
                        -</div></div>
                        <div class="col-sm">
                        <div class="number" style="margin: 0 10px; font-size: 1.2rem;">${item.numberOfUnits}</div></div>
                        <div class="col-sm">
                        <div class="btn plus" onclick="changeNumberOfUnits('plus',${item.id})" style="  width: 20px;
                        height: 20px;
                        font-weight: bold;
                    
                        cursor: pointer;">+</div></div> 
                    </div>        
                </div>
            </div>` 
    });
    cartItemsEl.innerHTML +=`
    <div class="cart-items">
        <!-- render cart items here -->
        <div class="cart-item">
            <div class="item-info">
                <h4></h4>
            </div>
            <div class="unit-price">
                <small></small>
            </div>
            <div class="units">
                <div class="btn minus">-</div>
                <div class="number">1</div>
                <div class="btn plus">+</div>           
            </div>
        </div>
    </div>`
}
//remove item from cart
function removeItemFromCart(id){
    cart = cart.filter((item)=> item.id !== id);

    updateCart();
}
//change num of units for an item
function changeNumberOfUnits(action, id) {
   cart = cart.map((item) => {

    let numberOfUnits = item.numberOfUnits;
       if(item.id ===id){
           if (action ==="minus" && numberOfUnits > 0.5){
               numberOfUnits-=0.5;
           }
           else if (action ==="plus" && numberOfUnits < item.instock){
               numberOfUnits+=0.5;
           }
       }
        return {
            ...item,
            numberOfUnits,
        };

    });

    updateCart();
}

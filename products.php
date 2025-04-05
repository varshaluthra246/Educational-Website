<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Subjectsaholic Products</title>

    <style>
        *{
            font-family: "poppins",sans-serif;
            margin:0;
            padding:0px;
            scroll-padding-top: 2rem;
            scroll-behavior: smooth;
            box-sizing: border-box;
            list-style: none;
            text-decoration: none;
        }
        body{
            background: linear-gradient(45deg, #ed60b5, #ff1252);
        
        }
        img{
            width: 100%;
        }
        /* Header */
        header{
            position: fixed;
            top:0;
            left:0;
            width: 100%;
            background: linear-gradient(45deg, #ed60a2, #ff1252);
            box-shadow: 0 1px 4px hsl(0 4% 15 / 10%);
            z-index: 100;
            
           
        }
        .nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px 0;
            color: white;
            
        }
        .nav_menu{
            height: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            display: flex;
            align-items: center;
            gap: 4rem;
            font-weight: 1000;
    
        }
        .nav_menu a{
            color:#fff;
        }
        .container{
            max-width: 1068px;
            margin: auto;
            width: 100%;
        }
        section{
            padding: 4rem 0 3rem;
        }
        .logo{
            font-size: 1.5rem;
            /*color: */
            font-weight: 400;
            color: white;
        }
        #cart-icon{
            font-size: 1.8rem;
            cursor: pointer;
        }
        .cart{
            position: fixed;
            top: 0;
            right: -100%;
            width: 360px;
            min-height: 100vh;
            padding: 20px;
            background: linear-gradient(to top right, #f96294 28%, #ff0066c4 92%);
            box-shadow: -2px 0 4px hsl(0 4% 15 / 10%);
            transition: 0.3s;
        }
        /*.cart{
            position: fixed;
            top: 0;
            right: 0;
            width: 360px;
            min-height: 100vh;
            padding: 20px;
            background: pink;
            box-shadow: -2px 0 4px hsl(0 4% 15 / 10%);
        }*/
        .cart.active{
            right: 0;
        }
        .cart-title{
            text-align: center;
            font-size: 1.5rem;
            font-weight: 600;
            margin-top: 2rem;
        }
        .cart-box{
            display: grid;
            grid-template-columns: 32% 50% 18%;
            align-items: center;
            gap: 1rem;
            margin-top: 1rem;
        }
        .cart-img{
            width: 100px;
            height: 100px;
            object-fit: contain;
            padding: 10px;
        }
        .detail-box{
            display: grid;
            row-gap: 0.5rem;
        }
        .cart-product-title{
            font-size: 1rem;
            text-transform: uppercase;
        }
        .cart-price{
            font-weight: 500;
        }
        .cart-quantity{
            border: 1px solid #ff0066;
            outline-color: black;
            width: 2.4rem;
            text-align: center;
            font-size: 1rem;
        }
        .cart-remove{
            font-size: 24px;
            color:white;
            cursor: pointer;
        }
        .total{
            display: flex;
            justify-content: flex-end;
            margin-top: 1.5rem;
            border-top: 2px solid black;
        }
        
        .total-title{
            font-size: 1rem;
            font-weight: 600;
        }
        .total-price{
            margin-left: 0.5rem;
        }
        .btn-buy{
            display: flex;
            margin: 1.5rem auto 0 auto;
            padding: 12px 20px;
            border: none;
            background: white;
            color: black;
            font-size: 1rem;
            font-weight: 700;
            cursor: pointer;
            border-radius: 5px;
        }
        .btn-buy:hover{
            background: rgb(233, 9, 129);
        }
        #close-cart{
            position: absolute;
            top: 1rem;
            right: 0.8rem;
            font-size: 2rem;
            color: white;
            cursor: pointer;
        }
        .section-title{
            font-size: 1.5rem;
            font-weight: 600;
            text-align: center;
        }
        .shop{
            margin-top: 2rem;
        }
        .shop-content{
            padding: 20px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, auto));
            gap: 3.5rem;   
        }
        .product-box{
            position: relative;
        }
        .product-box:hover{
            padding: 10px;
            border: 1px solid rgb(232, 12, 122);
            transition: 0.4s;
        }
        .product-img{
            width: 100%;
            
            height: 20rem;
            margin-bottom: 0.5rem;
        }
        .product-title{
            font-size: 1.1rem;
            font-weight: 600;
            text-transform: uppercase;
            margin-bottom: 0.5rem;
        }
        .price{
            font-weight: 500;
        }
        .add-cart{
            position: absolute;
            bottom: 0;
            right: 0;
            background: palevioletred;
            color: black;
            cursor: pointer;
            padding: 10px;
        }
        .add-cart{
            background-color: rgb(233, 18, 172);
        }

        .footer{
            position: relative;
            width: 100%;
            height: 58vh;
            padding: 50px 100px;
            background: #ff0066;
            line-height: 30px;
            
           
        }
        .box-container{
            width: 100%;
            display: grid;
            grid-template-columns: 2fr 2fr 1fr;
            grid-gap: 80px;
        }
        .box-container .box{
                display: grid;
        
        }
        .box-container .box h3{
            position: relative;
            color: #fff;
            font-weight: 500;
            margin-bottom: 10px;
        }
        .box h3:hover, .links:hover{
            color: yellow;
        }
        .box p:hover{
            color:yellow !important;
        }
        
        .box-container .box h3::before{
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100px;
            height: 2px;
            background: #ffeb3b;
        }
        .box-container .box p{
            color: #fff;
        }
        .share{
            margin-top: 20px;
            display: grid;
            grid-template-columns: repeat(4, 50px);
            grid-gap: 10px;
        }
        .share a{
            margin-left: 25px;
            outline-style: none;
            display: inline-block;
            width: 48px;
            height: 48px;
            background: #ffeb3b;
            display: grid;
            align-content: center;
            justify-content: center;
            text-decoration: none;
            border-radius: 12px;
        }
        .share a:hover{
            background: #ff66cc;
        }
        .share a .uil{
            color: #fff;
            font-size: 20px;
        }


        @media(max-width: 1080px){
            .nav{
                padding: 15px;
            }
            section{
                padding: 3rem 0 2rem; 
            }
            .container{
                margin: 0 auto;
                width: 90%;
            }
            .shop{
                margin-top: 2rem !important;
            }
        }
        @media(max-width: 400px){
            .nav{
                padding: 11px;
            }
            .logo{
                font-size: 1rem;
            }
            .cart{
                width: 320px;
            }
        }
        @media(max-width: 360px){
            .shop{
                margin-top: 1rem !important;
            }
            .cart{
                width: 280px;
            }
        }


    </style>
</head>
<body>
  <header>
    <div class="nav container">
        <a href = "#" class = "logo"> Subjectsaholic Products</a>
        <!--cart icons-->
        <ul class="nav_menu">
            <li><a href="home.php">Home</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="register_page.php">Courses</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
        <i class = "fas fa-shopping-basket " id = "cart-icon" ></i>
        
        <!-- Cart -->
        <div class="cart">
            <h2 class="cart-title">Your Cart Products</h2>
            <!--content -->
            <div class="cart-content">
                 <!--<div class="cart-box">
                   
                </div>-->
            </div>

            <!--TOTAL-->
            <div class="total">
                <div class="total-title">Total</div>
                <div class="total-price">$0</div>
            </div>
            <!--Buy Button-->
            <button type="button" class="btn-buy"> Buy Now</button>
            <!--cart-close-->
            <i class = "fa fa-close" id = "close-cart"></i>
        </div>
    </div>
  </header>
  <section class="shop container">
    <h2 class="section-title">shop products</h2>
    <!--content-->
    <div class="shop-content">
        <div class="product-box">
            <img src = "Images/notebook2.jpeg" alt = "" class="product-img">
            <h2 class="product-title">Subjectsaholic Bright Black Notebook</h2>
            <span class="price">$1</span>
            <i class="fa fa-shopping-cart add-cart"></i>
        </div>

        <div class="product-box">
            <img src = "Images/notebook.jpeg" alt = "" class="product-img">
            <h2 class="product-title">Subjectsaholic MultiPages Diary</h2>
            <span class="price">$1.21/-</span>
            <i class="fa fa-shopping-cart add-cart"></i>
        </div>

        <div class="product-box">
            <img src = "Images/notebook3.jpeg" alt = "" class="product-img">
            <h2 class="product-title">Subjectsaholic A5 Exclusive Designer Sheets</h2>
            <span class="price">$1/- each</span>
            <i class="fa fa-shopping-cart add-cart"></i>
        </div>

        <div class="product-box">
            <img src = "Images/sheet.jpeg" alt = "" class="product-img">
            <h2 class="product-title">Subjectsaholic A4 Size NoteBook</h2>
            <span class="price">$2/-</span>
            <i class="fa fa-shopping-cart add-cart"></i>
        </div>

        <div class="product-box">
            <img src = "Images/pen.jpeg" alt = "" class="product-img">
            <h2 class="product-title">Subjectsaholic Pen</h2>
            <span class="price">$0.61/-</span>
            <i class="fa fa-shopping-cart add-cart"></i>
        </div>

        <div class="product-box">
            <img src = "Images/bag.jpeg" alt = "" class="product-img">
            <h2 class="product-title">Subjectsaholic Waterproof Bag </h2>
            <span class="price">$3.63/-</span>
            <i class="fa fa-shopping-cart add-cart"></i>
        </div>
    </div>

  </section>
   <!--footer section-->
   <section class = "footer">
        <div class="box-container">
            <div class = "box">
                <h3> Subjectsaholic <i class="uil uil-book"></i></h3>
                <p> One of the Best platform to access all the materials </p>
                <p> Grow your skills to advance your career path </p>
                <p> Everybody deserves a good chance -- so as Subjectsaholic! </p>
                <div class = "share">
                    <a href = "https://www.instagram.com/subjectsaholic/" class = "uil uil-facebook"></a>
                    <a href = "https://www.instagram.com/subjectsaholic/" class = "uil uil-twitter"></a>
                    <a href = "https://www.instagram.com/subjectsaholic/" class = "uil uil-instagram"></a>
                    <a href = "https://www.instagram.com/subjectsaholic/" class = "uil uil-linkedin"></a>
                </div>
            </div>
            <div class ="box">
                <h3> Contact Info</h3>
                <a href ="#" class = "links"><i class="uil uil-phone"></i> +91 8882091675</a>
                <a href ="#" class = "links"><i class="uil uil-phone"></i> +91 9729859060</a>
                <a href ="contact.php" class = "links"><i class="uil uil-envelope"></i> varshaluthra22@gmail.com</a>
                <a href ="#" class = "links"><i class="uil uil-map-marker"></i> Sonepat, India</a>
            
            
            </div>
            <div class ="box">
                <h3> Quick Links </h3>
                <a href ="home.php" class = "links"><i class="uil uil-arrow-right"></i> Home</a>
                <a href ="aboutus.php" class = "links"><i class="uil uil-arrow-right"></i>Features</a>
                <a href ="courses.php" class = "links"><i class="uil uil-arrow-right"></i> Courses </a>
                <a href ="products.php" class = "links"><i class="uil uil-arrow-right"></i> Products </a>
                <a href ="contact.php" class = "links"><i class="uil uil-arrow-right"></i> Blogs & Reviews</a>
            </div>
        </div>
    </section>

  <!--LINK TO JAVASCRIPT -->
<script>
    //cart
    let cartIcon = document.querySelector("#cart-icon")
    let cart = document.querySelector('.cart')
    let closeCart = document.querySelector("#close-cart")
    //open cart
    cartIcon.onclick = () => {
        cart.classList.add("active");
    };
    //close cart
    closeCart.onclick = () => {
        cart.classList.remove("active");
    };
    //cart Working JS

    if (document.readyState == 'loading'){
        document.addEventListener("DOMContentLoaded",ready);
    }
    else{
        ready();
    }
    //making function:
    function ready(){
        //remove items from cart cart-remove
        var removeCartButtons = document.getElementsByClassName("cart-remove");
        console.log(removeCartButtons);
        for(var i = 0; i < removeCartButtons.length; i++){
            var button = removeCartButtons[i]
            button.addEventListener("click", removeCartItem);
        }
         //quantity Changes
         var quantityInputs = document.getElementsByClassName("cart-quantity");
         for(var i = 0; i < quantityInputs.length; i++){
             var input = quantityInputs[i];
             input.addEventListener("change", quantityChanged);
         } 
        //Add to cart
        var addCart = document.getElementsByClassName("add-cart");
        for(var i = 0;i< addCart.length;i++){
            var button = addCart[i];
            button.addEventListener("click", addCartClicked);
        }
        //Buy Button Work
        document.getElementsByClassName("btn-buy")[0].addEventListener("click", buyButtonClicked);
    }
    //buy button

    function buyButtonClicked(){
        alert("your order is Placed");
        var cartContent = document.getElementsByClassName("cart-content")[0];
        while (cartContent.hasChildNodes()){
            cartContent.removeChild(cartContent.firstChild);
        }
        updateTotal();
    }
    //remove items from cart
    function removeCartItem(event){
        var buttonClicked = event.target;
        buttonClicked.parentElement.remove();
        updateTotal();
    }
    //quantity changes
    function quantityChanged(event){
        var input = event.target;   
        if(isNaN(input.value) || input.value <=0){
            input.value = 1;
        }
        updateTotal();
    }

    //addCartClicked
    function addCartClicked(event){
        var button = event.target;
        var shopProducts = button.parentElement;
        var title = shopProducts.getElementsByClassName("product-title")[0].innerText;
        var price = shopProducts.getElementsByClassName("price")[0].innerText;
        var productImg= shopProducts.getElementsByClassName("product-img")[0].src;
        //console.log(title, price, productImg);
        addProductToCart(title, price, productImg);
        updateTotal();
    }

    function addProductToCart(title, price, productImg){
        var cartShopBox = document.createElement("div");
        cartShopBox.classList.add("cart-box");
        var cartItems = document.getElementsByClassName("cart-content")[0];
        var cartItemsNames = cartItems.getElementsByClassName("cart-product-title");
        for(var i = 0; i < cartItemsNames.length; i++){
            if(cartItemsNames[i].innerText == title){
            alert("You have already added this product to cart");
            return;
        }
    }
    
    
    var cartBoxContent = `
                    <img src = "${productImg}" alt = " " class="cart-img">
                    <div class="detail-box">
                        <div class="cart-product-title">${title}</div>
                        <div class="cart-price">${price}</div>
                        <input type="number" value="1" class="cart-quantity">
                    </div>
                   <!--Remove Cart -->
                    <i class = "fa fa-trash cart-remove"></i>`;  
    cartShopBox.innerHTML = cartBoxContent;
    cartItems.append(cartShopBox);
    cartShopBox.getElementsByClassName("cart-remove")[0].addEventListener("click", removeCartItem);
    cartShopBox.getElementsByClassName("cart-quantity")[0].addEventListener("change", quantityChanged);
              
                }                   


    //update total
    function updateTotal(){
        var cartContent = document.getElementsByClassName("cart-content")[0];
        var cartBoxes = cartContent.getElementsByClassName("cart-box");
        var total = 0;
        for(var i = 0; i <cartBoxes.length; i++ ){
            var cartBox = cartBoxes[i]
            var priceElement = cartBox.getElementsByClassName("cart-price")[0];
            var quantityElement = cartBox.getElementsByClassName("cart-quantity")[0];
            var price = parseFloat(priceElement.innerText.replace("$",""));
            var quantity  = quantityElement.value
            total = total + (price * quantity);
        }
            //if price contains same cents value     55:51
            total = Math.round(total * 100) /100;

            document.getElementsByClassName("total-price")[0].innerText = "$" + total;
       
    }






</script>
</body>
</html>

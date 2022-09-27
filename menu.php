<?php 
session_start();
    include('connection.php');
    include('functions.php');
    $user_data = check_login($con);
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Food Ordering Website</title>
    <!-- <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/styles-cart.css"> -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Padauk:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet">
    <script type="text/javascript" src="js.js" async></script>
    <style>
        <?php
            include 'menu-style/styles.css';
            include 'menu-style/styles-cart.css';
        ?>
    </style>

</head>
  <body>
<div class="xyz">
    <div class="menu-header">
        <h1>Our Menu</h1>
    </div>
      <div class="menu">

          <!--    Single menu 1     -->
          <div class="single-menu">
              <!-- Image Div -->
              <div class="image">
                  <img class="product-img" src="./menu-images/food-1.jpg">
              </div>
              <!--    Menu Content    -->
              <div class="menu-content">
                  <h4 class="product-name">Paneer Makhani</h4>
                  <span class="product-price">Price &#8377;250</span>
                  <!-- Button -->
                  <div class="btn">
                      <span class="butt add-to-cart">Add To Cart</span>
                  </div>
              </div>

          </div>
          <!--    Single menu 2     -->
          <div class="single-menu">
              <!-- Image Div -->
              <div class="image">
                  <img class="product-img" src="./menu-images/food-2.jpg">
              </div>
              <!--    Menu Content    -->
              <div class="menu-content">
                  <h4 class="product-name">Lemon Rice</h4>
                  <span class="product-price">Price &#8377;200</span>
                  <!-- Button -->
                  <div class="btn">
                      <span class="butt add-to-cart">Add To Cart</span>
                  </div>
              </div>

          </div>
          <!--    Single menu 3     -->
          <div class="single-menu">
              <!-- Image Div -->
              <div class="image">
                  <img class="product-img" src="./menu-images/food-3.jpg">
              </div>
              <!--    Menu Content    -->
              <div class="menu-content">
                  <h4 class="product-name">Veg Pulao</h4>
                  <span class="product-price">Price &#8377;150</span>
                  <!-- Button -->
                  <div class="btn">
                      <span class="butt add-to-cart">Add To Cart</span>
                  </div>
              </div>

          </div>
          <!--    Single menu 4     -->
          <div class="single-menu">
              <!-- Image Div -->
              <div class="image">
                  <img class="product-img" src="./menu-images/food-4.jpg">
              </div>
              <!--    Menu Content    -->
              <div class="menu-content">
                  <h4 class="product-name">Pav Bhaji</h4>
                  <span class="product-price">Price &#8377;100</span>
                  <!-- Button -->
                  <div class="btn">
                      <span class="butt add-to-cart">Add To Cart</span>
                  </div>

              </div>
          </div>
          <!--    Single menu 5     -->
          <div class="single-menu">
              <!-- Image Div -->
              <div class="image">
                  <img class="product-img" src="./menu-images/food-5.jpg">
              </div>
              <!--    Menu Content    -->
              <div class="menu-content">
                  <h4 class="product-name">Pizza</h4>
                  <span class="product-price">Price &#8377;400</span>
                  <!-- Button -->
                  <div class="btn">
                      <span class="butt add-to-cart">Add To Cart</span>
                  </div>
              </div>

          </div>
          <!--    Single menu 6     -->
          <div class="single-menu">
              <!-- Image Div -->
              <div class="image">
                  <img class="product-img" src="./menu-images/food-6.jpg">
              </div>
              <!--    Menu Content    -->
              <div class="menu-content">
                  <h4 class="product-name">Noodles</h4>
                  <span class="product-price">Price &#8377;350</span>
                  <!-- Button -->
                  <div class="btn">
                      <span class="butt add-to-cart">Add To Cart</span>
                  </div>
              </div>

          </div>
          <!--    Single menu 7     -->
          <div class="single-menu">
              <!-- Image Div -->
              <div class="image">
                  <img class="product-img" src="./menu-images/food-7.jpg">
              </div>
              <!--    Menu Content    -->
              <div class="menu-content">
                  <h4 class="product-name">Sandwich</h4>
                  <span class="product-price">Price &#8377;200</span>
                  <!-- Button -->
                  <div class="btn">
                      <span class="butt add-to-cart">Add To Cart</span>
                  </div>
              </div>

          </div>
          <!--    Single menu 8     -->
          <div class="single-menu">
              <!-- Image Div -->
              <div class="image">
                  <img class="product-img" src="./menu-images/food-8.jpg">
              </div>
              <!--    Menu Content    -->
              <div class="menu-content">
                  <h4 class="product-name">Veg Wrap</h4>
                  <span class="product-price">Price &#8377;180</span>
                  <!-- Button -->
                  <div class="btn">
                      <span class="butt add-to-cart">Add To Cart</span>
                  </div>
              </div>

          </div>
          <!--    Single menu 9     -->
          <div class="single-menu">
              <!-- Image Div -->
              <div class="image">
                  <img class="product-img" src="./menu-images/food-9.jpg">
              </div>
              <!--    Menu Content    -->
              <div class="menu-content">
                  <h4 class="product-name">Chole Bhature</h4>
                  <span class="product-price">Price &#8377;200</span>
                  <!-- Button -->
                  <div class="btn">
                      <span class="butt add-to-cart">Add To Cart</span>
                  </div>
              </div>

          </div>
          <!--    Single menu 10     -->
          <div class="single-menu">
              <!-- Image Div -->
              <div class="image">
                  <img class="product-img" src="./menu-images/food-10.jpg">
              </div>
              <!--    Menu Content    -->
              <div class="menu-content">
                  <h4 class="product-name">Misal</h4>
                  <span class="product-price">Price &#8377;150</span>
                  <!-- Button -->
                  <div class="btn">
                      <span class="butt add-to-cart">Add To Cart</span>
                  </div>
              </div>

          </div>

      </div>
</div>
      <div class="cart-container">
          <h2 class="container-title header">CART</h2>
          <div class="cart-row">
              <span class="cart-item cart-column titles">Item</span>
              <span class="cart-price cart-column titles">Price</span>
              <span class="cart-quantity cart-column titles">Quantity</span>
          </div>
          <div class="cart-items">
              
              
          </div>
          <div class="cart-total">
              <span class="cart-total-title"><strong>Total</strong></span>
              <span class="cart-total-price">&#8377;0</span>
          </div>
          <button class="btn btn-primary btn-purchase" type="button" id='order'>ORDER</a></button>
      </div> 
      
  </body>
</html>

<?php 
session_start();
    include('connection.php');
    include('functions.php');
    $user_data = check_login($con);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Online Food Delivery in India</title>
    <link rel="stylesheet" media="screen and (max-width :1170px)" href="css/phone.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <style>
        <?php
            include 'website-style/style.css';
            

        ?>
    </style>
</head>

<body>
    <div id="navbar">
        <div id="logo">
            <img id="image" src="./website-images/website-logo.png" alt="loading..s">
        </div>

        <ul>
            <li class="item"><a href="#home">Home</a></li>
            <li class="item"><a href="index2.html">About us</a></li>
            <li class="item"><a href="#client-section">Services</a></li>
            <li class="item"><a href="#contact">Contact us</a></li>
            <li class="item logout"><a href="logout.php">Logout</a></li>
            
        </ul>
        <span id="user-style">Hello <?php echo $_SESSION['user_name'];?></span>
    </div>

    <section id="home">
        <h1 class="h-primary">Welcome To MyOnlineMeal</h1>
        <p>Order Delicious Food from various cuisines!  </p>
        <p>Cooked and Delivered safely!</p>   
        <a href="menu.php">
            <button class="btn" >Order Now</button>
        </a>    
        
    </section>
    <section id="services-container">
        <h1 class="h-primary center">Our Services</h1>
        <div id="services">
            <div class="box">
                <img src="./website-images/1.jpg" alt="">
                <h2 class="h-secondary center">Food Clutering</h2>
                <p class="center">We have variety of dishes to choose from!
                    
                </p>
            </div>
            <div class="box">
                <img src="./website-images/2.jpg" alt="">
                <h2 class="h-secondary center">Bulk Ordering</h2>
                <p class="center">Running a business?
                    Avail various offers on bulk orders which suits you!!
                    Get exclusive discounts just on our website!!
                </p>
            </div>
            <div class="box">
                <img src="./website-images/3.jpg" alt="">
                <h2 class="h-secondary center">Food Ordering</h2>
                <p class="center">Hey foodies...
                    Be it traditional cuisines or continental dishes , we have got all of it!!
                    Order from us !!
                </p>
            </div>
        </div>
    </section>

    <section id="client-section">
        <h1 class="h-primary center">Our Clients</h1>
        <div id="clients">
            <div class="clients-item">
                <img src="./website-images/logo1.png" alt="Our clients">
            </div>
            <div class="clients-item">
                <img src="./website-images/logo2.png" alt="Our clients">
            </div>
            <div class="clients-item">
                <img src="./website-images/logo3.png" alt="Our clients">
            </div>
            <div class="clients-item">
                <img src="./website-images/logo4.png" alt="Our clients">
            </div>
        </div>
    </section>

    <section id="contact">
        <h1 class="h-primary center">Contact us</h1>
        <div id="contact-box">
            <form action="">
                <div class="form-group">
                    <label for="name">Name :</label>
                    <input type="text" name="name" id="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" name="name" id="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="Phone no">Phone No :</label>
                    <input type="phone" name="name" id="phone no" placeholder="Enter your Phone No">
                </div>
                <div class="form-group">
                    <label for="message">Message :</label>
                    <textarea name="message" id="" cols="30" rows="10"></textarea>
                </div>
            </form>    
        </div>
        
        
    </section>

    <footer>
        <div class="center">
            Copyright &copy;www.MyOnlineMeal.com.All rights reserved.
        </div>
    </footer>

</body>

</html>
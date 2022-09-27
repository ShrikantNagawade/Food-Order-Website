<?php
    session_start();
    include('connection.php');
    include('functions.php');
    $user_data = check_login($con);
    
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $_SESSION['user_email'] = $_POST['user_email'];
        $_SESSION['user_address'] = $_POST['user_address'];
        $_SESSION['user_number'] = $_POST['user_number'];
        $_SESSION['name_name'] = $_POST['name_name'];
        
        header('Location: confirm-payment.php');
     
    }
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Pattaya&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="./receipt-styles/style-receipt.css">
    <script type="text/javascript" src="./javascript-receipt.js" async></script>

    <link rel="stylesheet" href="./receipt-form-style/style1.css">
</head>
<body>
    <div class="receipt-container">
        <div class="receipt-header"><h2><span>Reciept</span></h2>
        </div>
            <div class="receipt-titles">
                <span class="item title item-style">Items</span>
                <span class="item title item-style">Price</span>
            </div>
            <div class="receipt-content">
                
            </div>
            <div class="receipt-total">
                <span class="item item-total"></span>
            </div>
    </div>
    
    <!-- Receipt form -->

    <div class="home">
        <div class="logo">
            <img src="./receipt-form-images/logo.png" alt="Loading">
        </div>
        <h1>Foodies</h1>
        <h5>Just Taste</h5>

        <div id="para1"></div>
        <hr>

        <h3>Personal Information</h3>
    <div id="form">
        <div id="contact-box">
        <form method="post">
            <hr id="line">
            <br>
            <div id="bill">
                <tr><td>
                <label for="name">Name :</label>
                <input type="text" name="name_name" id="name" placeholder="Enter your name" >
                </td></tr>
            </div>
            <div id="bill">
                <tr><td>
                <label for="address">Address :</label>
                <input type="text" name="user_address" id="address" placeholder="Enter your address" >
            </td></tr>
            </div>
            <div id="bill">
                <label for="email">Email :</label>
                <input type="email" name="user_email" id="email" placeholder="Enter your email" >
            </div>
            <div id="bill">
                <label for="ph">Phone No :</label>
                <input type="number" name="user_number" id="phone" placeholder="Enter your Phone No" >
            </div>
            <div id="bill">
                <label for="country">Country :</label>
                <input type="text" name="name" id="country" placeholder="Your Country" >
            </div>
            <br>
            <hr>
            <div id="submit-btn">
                <input type="submit" id="btn" value="Place Order">
            </div>
        
        </div>
       
    </form>
    
   
    
    </div>
    </div>

    <!-- <script type="module" src="../javascript.js"></script> -->
    <!-- javascript for receipt form time -->
    <script>
        document.getElementById("para1").innerHTML = formatAMPM();

        function formatAMPM() {
            var d = new Date(),
                minutes = d.getMinutes().toString().length == 1 ? '0' + d.getMinutes() : d.getMinutes(),
                hours = d.getHours().toString().length == 1 ? '0' + d.getHours() : d.getHours(),
                ampm = d.getHours() >= 12 ? 'pm' : 'am',
                months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'Octomber', 'November', 'December'],
                days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
            return days[d.getDay()] + ' ' + months[d.getMonth()] + '/' + d.getDate() + '/' + d.getFullYear() + ' ' + hours + ':' + minutes + ampm;
        }
    </script>
</body>
</html>
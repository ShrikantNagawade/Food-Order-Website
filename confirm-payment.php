<?php 

    session_start();
    include('connection.php');
    include('functions.php');
    $user_data = check_login($con);
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./confirm-payment-style/style4.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="jquery-3.6.0.min.js"></script>

    <title>Online Payment</title>
</head>
<body>
    <div class="payment">
        <h1>Confirm Your Payment</h1>
        <form method="post"  action="" onsubmit="return false" >
            <div class="first-row">
                <div class="owner">
                    <h3>Owner</h3>
                    <div class="input-field">
                        <input type="text" name="name" placeholder="Name">
                    </div>    
                </div>   
                <div class="cvv"> 
                    <h3>CVV</h3>
                    <div class="input-field">
                        <input type="password" placeholder="cvv">
                    </div>
                </div>    
            </div>
            <div class="second-row">
                <div class="card-number">
                    <h3>Card Number</h3>
                    <div class="input-field">
                        <input type="number" name="cardnumber" placeholder="Card Number">
                    </div>        
                </div>
            </div>
            <div class="third-row">
                <div class="selection">
                    <div class="date">
                        <h3>Expiry Date</h3>
                        <select name="month" id="month">
                            <option value="jan">January</option>
                            <option value="jan">February</option>
                            <option value="jan">March</option>
                            <option value="jan">April</option>
                            <option value="jan">May</option>
                            <option value="jan">June</option>
                            <option value="jan">July</option>
                            <option value="jan">August</option>
                            <option value="jan">September</option>
                            <option value="jan">Octomber</option>
                            <option value="jan">November</option>
                            <option value="jan">December</option>
                        </select>      
                        <select name="year" id="year">
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                        </select> 
                </div>
                    <div class="cards">
                        <img src="./confirm-payment-images/mc.png" alt="">
                        <img src="./confirm-payment-images/pp.png" alt="">
                        <img src="./confirm-payment-images/vi.png" alt="">
                    </div>
                </div>
                <div class="submit-class">
            <button type="submit" name="submit_me" id="submit-btn" onclick="notify()">Confirm</button>
            </div>
            </form>
            
        </div>

    <script type="text/javascript">
        
        function notify()
        {
            swal({
                    icon: "success",
                    title:"Paid Successfully",
                    });
            var Cart = JSON.parse(localStorage.getItem('carts'));
            var Cart_total = localStorage.getItem('cart_totals');
            $.ajax(
                {
                    url:'mail.php',
                    method:'post',
                    data:{ Cart: JSON.stringify(Cart), Cart_total:Cart_total},
                    success:function()
                    {
                        
                        window.location = "indexs.php";
                    }
                }
            )
        }
    </script>
</body>
</html>
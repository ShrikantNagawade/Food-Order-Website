<?php
     session_start();
     include('connection.php');
     include('functions.php');
     $user_data = check_login($con);
// print_r($_POST['Cart']);
$Cart = json_decode($_POST['Cart']);
$Cart_total = $_POST['Cart_total'];
// foreach($Cart as $Item){
//     echo $Item->name;
// }
// echo $Cart[0]->name; 
// echo($_POST[0]);
$Item_data='';
foreach ($Cart as $Item) {
    $Item_data  .= '<span style="color:white;">Item:</span> '.$Item->name.'<span style="color:white;"> | Price: </span>'.$Item->price.' X '.$Item->Quantity.' Qty.'."<br>";
}
// $It = 'hello'.PHP_EOL.'hello';
// echo($Item_data);
// echo($Cart_total);
    

    $to = $_SESSION['user_email'];
    $USER_NAME = $_SESSION['name_name'];
    $USER_ADD = $_SESSION['user_address'];
    $USER_NUM = $_SESSION['user_number'];
    $subject = 'Your order will be delivered soon to the address: '.$USER_ADD;
    $headers = 'From: foodies564@gmail.com';
    $cart =  '<script> var Cart_total = localStorage.getItem("cart_totals");</script>'; 
   $htmlContent = '
    <html>
    <body>
    <div style="background-color:rgb(250, 87, 62);font-weight:normal;color:black;padding:3px;border:1px solid black;">
    <p style="font-family:garamond;font-size:22px;text-align:center">Hello '.$USER_NAME.' !!</p>
    <p style="color:Black; text-align:center;font-size:20px"><i><span style="border-bottom:1px solid black;">Receipt</span></i></p>
    '.
    '<p style="font-size:18px ;text-align:center;margin-bottom:5px">'.$Item_data.'</p>'.
    '<p style="font-size:18px;text-align:center"><span style="color:white;"> Total Price: </span> &#x20b9; '.$Cart_total.'</p>
    
    <p style="font-size:16px;text-align:center">Hope you are doing well.</p>
    <p style="font-size:16px;text-align:center">Your order has been placed and will be delivered soon!!</p>
    <p style="font-size:14px">Regards <i>Team Foodies.</i></p>
    <p style="font-size:14px">Contact details provided by you:</p>
    <p style="font-size:14px">Contact number: '.$USER_NUM.' </p>
    <p style="font-size:14px ;color:black;">Email Id: '.$to.' </p>
    </div>
    
    </body>
    </html>
    ';
    $headers = "MIME-Version: 1.0" . "\r\n"; 
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
mail($to,$subject,$htmlContent,$headers);
    
if(mail($to, $subject, $htmlContent, $headers)){ 
// header('Location:indexs.php');
die;
}else{ 
echo "Email not sent" ;
}


?>
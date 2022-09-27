<?php
function check_login($con)
{
    if(isset($_SESSION['user_id']))
    {
        $id = $_SESSION['user_id'];
        $query = "select * from users where user_id = '$id' limit 1";
        
        $result = mysqli_query($con, $query);
        if($result && mysqli_num_rows($result)>0)
        {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        
        }
    }
   
    //redirect to login page
    header('Location:login.php');
    die;

}

//this function is used to generate a random number for user_id in database
function random_num($length)
{
    $text = "";
    if($length < 5)
    {
        $length = 5;
    }

    $len = rand(4,$length); //generates a random number between 4 to $length to be used in the for loop

    //this loop generates a number of the length len and consists of numbers from 0 to 9
    for($i=0;$i<$len;$i++)
    {
        $text .= rand(0,9);
    }

    return $text;

}

?>
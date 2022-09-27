<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpswd = "";
$dbname = "login_db";
if(!$con = mysqli_connect($dbhost,$dbuser,$dbpswd,$dbname))
{
    die("failed to connect");
}
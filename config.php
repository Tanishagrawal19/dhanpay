<?php
//start session
session_start();

    $_SERVER="localhost"; 
    $_username ="root";
    $_password="";
    $_dbname="dhanpay";

 //query to save to db
    $conn= mysqli_connect($_SERVER , $_username ,$_password) or die(mysqli_error()); //database connection
    $db_select= mysqli_select_db($conn , 'dhanpay') or  die(mysqli_error()); //selecting database

    ?>
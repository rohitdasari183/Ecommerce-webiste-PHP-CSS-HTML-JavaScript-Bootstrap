<?php
session_start();
include("config.php");
if(isset($_POST['placeOrderBtn']))
{
    $r=$_POST['prod_name'];
    $a=$_POST['name'];
    $b=$_POST['email'];
    $c=$_POST['phone'];
    $d=$_POST['pincode'];
    $e=$_POST['address'];

    $tracking_id="RoEcom".rand(1111,9999).substr($c,2);
    $user_id=substr($a,3).rand(111,999);
    $f=$_POST['total_price'];
    $g=$_POST['payment_mode'];
    $payment_id="RoEcom".rand(1111,9999).substr($f,3);
    $h=$_POST['status'];
    $i=$_POST['comments'];

    $query=$DBcon->query("INSERT INTO `orders` (`prod_name`, `tracking_id`, `user_id`, `name`, `email`, `phone`, `address`, `pincode`, `total_price`, `payment_mode`, `payment_id`, `status`, `comments`) VALUES ('$tracking_id', '$user_id', '$a', '$b', '$c', '$e', '$d', '$f', '$g', '$payment_id', '$h', '$i');");
    if($query==true)
    {
      
        header("location:yourorders.php");
    }
    




}
?>
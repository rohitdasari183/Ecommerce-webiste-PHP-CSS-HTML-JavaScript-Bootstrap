<?php
session_start();
if(isset($_SESSION['usersession'])!="")
{
    
    header("Location:login.php");
}
require_once("config.php");
if(isset($_POST['btn-signup']))
{
    $uname=$_POST['name'];
    $uphone=$_POST['phone'];
    $uaddress=$_POST['address'];
    $uemail=$_POST['email'];
    $upassword=$_POST['password'];
    $user=$_POST['username'];




    $hashed_password=password_hash($upassword,PASSWORD_DEFAULT);
    $check_email=$DBcon->query("SELECT u_email from user WHERE u_email='$uemail'");
    $count=$check_email->fetch_array();

    if($count==0)
    {
        $query="INSERT INTO user(u_name,u_phone,u_address,u_email,u_password,u_username) VALUES('$uname','$uphone','$uaddress','$uemail','$hashed_password','$user')";
        if($DBcon->query($query))
        {
            $msg="successfully registered";
            header("location:login.php");
        }
        else
        {
            $msg="Error in registration";
        }
    }
    else
    {
        $msg="Email already taken";
    }
}
?>
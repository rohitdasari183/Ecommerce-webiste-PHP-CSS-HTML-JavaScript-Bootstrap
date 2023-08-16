<?php
session_start();
require_once("config.php");
if(isset($_SESSION['usersession'])!="")
{
	header("location:register.php");
	exit;
}
if(isset($_POST['btn-login']))
{
	echo $email=$_POST['email'];
	echo $password=$_POST['password'];

	echo $sql=$DBcon->query("SELECT id,u_email,u_password from ecommerce.user WHERE u_email='$email' ");
    
	echo $row=$sql->fetch_array();
	echo $count=$sql->num_rows;
	if(password_verify($password,$row['u_password']) && $count==1)
	{
		$_SESSION['usersession']=$row['u_email'];
		header("location:register.php");
	}
	else
	{
		echo "Invalid username or password";
	}
	$DBcon->close();
}
?>
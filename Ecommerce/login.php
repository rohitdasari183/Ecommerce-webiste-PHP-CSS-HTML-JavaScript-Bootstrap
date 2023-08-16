
<?php
session_start();
error_reporting(0);
require_once("config.php");
if(isset($_SESSION['usersession'])!="")
{
	header("location:userpanel.php");
	exit;
}
if(isset($_POST['btn-login']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];
    $role=$_POST['role'];

    if($role==1)
    {
        $sql=$DBcon->query("SELECT u_id,u_email,u_password,u_role from ecommerce.user WHERE u_email='$email' ");
    
        $row=$sql->fetch_array();
        $count=$sql->num_rows;
        if(password_verify($password,$row['u_password']) && $count==1)
        {
            
            $_SESSION['usersession']=$row['u_email'];
            header("location:adminpanel.php");
    
        }
        else
        {
    
           $_SESSION['message']="Invalid Credentails";
        }
        $DBcon->close();
    } 
    
   else
   {
	$sql=$DBcon->query("SELECT u_id,u_email,u_password from ecommerce.user WHERE u_email='$email' ");
    
	$row=$sql->fetch_array();
	$count=$sql->num_rows;
	if(password_verify($password,$row['u_password']) && $count==1)
	{
        
		$_SESSION['usersession']=$row['u_email'];
		header("location:userpanel.php");

	}
	else
	{

		echo "Invalid username or password";
	}
	$DBcon->close();
   }
}
?>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="assets1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        .btn-primary{
            background-color:blue;
            color:white;
            margin:5px;
            padding:5px;
        }
       .navbar-nav{
        list-style-type:none;
        margin:0;
        padding:0;
        overflow:hidden;
        background-color:black;

        
        }
        .nav-item{
            float:left;
        }
        .nav-item a{
            display:block;
            color:white;
            text-align:center;
            padding:14px 16px;
            text-decoration:none;
        }
        .nav-item a:hover{
            background-color:blue;
        }
        .dropdown-menu{
            list-style:none;
        }
        .dropdown-menu{
            display:block;
        }
       
            
            body{
                background-image:linear-gradient(to right,fuchsia,grey);
            }
            .button{
                background-color:blue;
                color:white;
                font-size:13px;
            }
            .form-data{
                display:grid;
            
                color:black;
                margin:20px;
                font-size:25px;
                padding:15px;
            }
            .table-bordered{
               
              border:2px solid black;
              margin:-50px;
            }
            th{
              border:2px solid black;
            }
            tr{
              border:2px solid black;
            }
            td{
              border:2px solid black;
            }
            h1{
              font-family:sans-serif;
              font-size:20px;
              margin:30px;
            }
  
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="userpanel.php">Ecommerce</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="userpanel.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">Register</a>
        </li>
       
        
      </ul>
    </div>
  </div>
</nav>


   


<center>
<div class="form-data">
<?php

if(isset($_SESSION['message']))
{
    echo "Invalid Credentials";
}
?>

</div>
    <form action="" method="post"> 
    <h1>Login Form</h1> 

  

    
 
  

  
  
<br>  
<br>  

  
<table class="table-bordered">
    <tr>
<td><input type="email" id="email" name="email" placeholder="Enter Email Address"></td>
</tr>    
 
<tr>
<td><input type="password" id="password" name="password" placeholder="Enter Password"></td>  
</tr>
<tr>
<td><input type="text" name="role" placeholder="Enter role(0 or 1)"></td>
</tr>
<tr>
<td><center><input class="button" type="submit" name="btn-login" value="Login"> </center></td>
</tr> 
</table>
</form></center>  
<script src="assets1/js/jquery-3.7.0.min.js"></script>
    <script src="assets1/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>



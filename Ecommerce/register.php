
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
                background-image:linear-gradient(to right,silver,fuchsia);
            }
            .button{
                background-color:blue;
                color:white;
                
            }
            .table-bordered{
              border:2px solid black;
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
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>

   


<center>
    <form action="" method="post">  
<h1>Registration Form</h1>
  
<table class="table-bordered">
            <tr>
                <td><input type="text" name="name" class="form-control" placeholder="Enter Full Name" required=""> </td>
            </tr>
            <tr>
                <td><input type="text" name="phone" class="form-control" placeholder="Enter Phone Number" required=""> </td>
            </tr>
            <tr>
                <td><textarea name="address" class="form-control" placeholder="Enter Address" required=""></textarea> </td>
            </tr>
            <tr>
                <td><input type="text" name="email" class="form-control" placeholder="Enter Email" required=""> </td>
            </tr>
            <tr>
                <td><input type="text" name="password" class="form-control" placeholder="Enter Password" required=""> </td>
            </tr>
            <tr>
                <td><input type="text" name="username" class="form-control" placeholder="Enter Username" required=""> </td>
            </tr>
            <tr>
              <td>            <center><input class="button" type="submit" name="btn-signup"  value="submit"></center>
</td>
            </tr>
        </table>

</form></center>  
<?php 

if(isset($msg))
{
   if($msg==True)
   {
    echo $msg;
   }
}

?>
<script src="assets1/js/jquery-3.7.0.min.js"></script>
    <script src="assets1/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>



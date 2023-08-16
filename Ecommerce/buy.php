<?php 
include("config.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="assets1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        *{
        font-family:'Roboto',sans-serif;
    }
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
        ul{
            margin:50px;
            display:inline-block;
        }
        .card{
            display:inline-block;
            box-shadow:0 4px 8px 0 rgba(0,0,0,0.2);
            transition:0.3s;
        }
        .card:hover{
            box-shadow:0 8px 16px 0 rgba(0,0,0,0.2);
        }
        button{
        background-color:Red;
        color:white;
    }
       
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="userpanel.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="collections.php">Collections</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="displaycart.php">Carts</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
<nav  class="navbar ">
<ul class="navbar-nav">
     
</ul>
</nav>
<form action="addbuy.php" method="POST">
      <h1> Your Order Details </h1>
    

      <input style="background-color:wheat" class="text" type="text" name="prod_name" placeholder="Enter Prodcut Name" required="" size=50></br></br>

                    <input style="background-color:wheat" class="text" type="text" name="name" placeholder="Enter Your Name" required="" size=50></br></br>

					<input  style="background-color:wheat" class="text email" type="text" name="email" placeholder="Enter Email Address" required="" size=50><hr>
					<input style="background-color:wheat" class="text" type="text" name="phone" placeholder="Enter Phone Number" required="" ><hr>
                    <input style="background-color:wheat" class="text" type="text" name="pincode" placeholder="Enter Pincode" required="" ><hr>
					<textarea style="background-color:wheat" class="text email" type="text" name="address" placeholder="Enter Your Address" required="" size=50 rows=3 cols="50"></textarea><hr><br>
					<input  style="background-color:wheat" class="text email" type="text" name="total_price" placeholder="Enter Exact Price of item" required="" size=50><hr>
                    <input  style="background-color:wheat" class="text email" type="text" name="qty" placeholder="Enter Quantity of items" required="" size=50><hr>


                    <label for="payment_mode">Choose Mode</label>
                    <select class="form-select" name="payment_mode" disabled>
                       
                       <option value="offline">Offline</option>
                   
                    </select><br></br>

                    <label for="">Status</label>
                    <input type="checkbox" name="status"></div>
         

                    <textarea style="background-color:wheat" class="text" type="text" name="comments" placeholder="Any Comments" required="" rows=3 cols="50"></textarea><hr>
                  


                    <div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label></br></br>
						<div class="clear"> </div>
					</div>
					<input style="background-color:blue;color:white" type="submit" name="placeOrderBtn" value="Place Order">

</form>


        
       
    

    




<script src="assets/js/jquery-3.7.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>

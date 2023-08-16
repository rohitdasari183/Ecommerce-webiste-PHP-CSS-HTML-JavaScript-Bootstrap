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
<h1>Your Order Details</h1>
<?php
$query=$DBcon->query("SELECT * FROM orders");

echo "<table border='7' height='100px' width='800px' align='center' >

<tr>
<th>ID</th>
<th>Tracking Number</th>
<th>Total Price</th>


<th>Date</th>







 </tr>";
while($row = mysqli_fetch_array($query))
{

   ?><tr>
   <ul>
   <div class="card">
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['tracking_id']?></td>
            <td><?php echo $row['total_price']?></td>
            <td><?php echo $row['created_at']?></td>
            <td><a href="viewdetails.php?view=<?php echo $row['id'];?>"><button>View Details</button></a></td>



     </tr>





        
       
    

    
  <?php
}



?>



<script src="assets/js/jquery-3.7.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>

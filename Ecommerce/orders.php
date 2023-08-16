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
        
      </ul>
    </div>
  </div>
</nav>
<nav  class="navbar ">
<ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page">
            <a href="userpanel.php">Home</a>/<a href="collections.php">Collections</a>
        </li>
</ul>
</nav>
<?php
$query=$DBcon->query("SELECT * FROM orders");
echo "<table border='7' height='200px' width='1000px' align='center' >

<tr>
<th>ID</th>
<th>Tracking ID</th>
<th>User ID</th>

<th>Name</th>


<th>Email</th>
<th>Phone</th>
<th>Product Name</th>
<th>Price</th>







 </tr>";
while($row = mysqli_fetch_array($qry))
{

?><tr>
    <td><?php echo $row['id'];?></td>
    <td><?php echo $row['tracking_id'];?></td>
    <td><?php echo $row['user_id'];?></td>
    <td><?php echo $row['name'];?></td>
    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['phone'];?></td>
    <td><?php echo $row['prod_name'];?></td>
    <td><?php echo $row['total_price'];?></td>



    

    <td><a href="editproduct.php?edit=<?php echo $row['id'];?>"><button>Edit</button></a></td>
    <td><a href="deleteproduct.php?delete=<?php echo $row['id'];?>"><button>Delete</button></a></td>
    <td><a href="viewproduct.php?view=<?php echo $row['id'];?>"><button>View</button></a></td>



    
   


</tr>
<?php
}
echo "</table>";


?>




<script src="assets/js/jquery-3.7.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>

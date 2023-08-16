

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>
    Ecommerce Website
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/material-dashboard.min.css" rel="stylesheet" />
  <style>
    *{
        font-family:'Roboto',sans-serif;
    }
    .message{
      padding:20px;
      background-color:green;
      color:white;
      margin-bottom:15px;
    }
    .main:hover{
      background-color:magenta;
    }
    .submit-success{
      display:none;

    }
    .submit-success[data-submit="success"]{
      display:block;
    }
    .submit-error{
      display:none;
    }
    .submit-error[data-submit="error"]{
      display:block;
    }
    .btn-primary{
            background-color:blue;
            color:white;
            margin:5px;
            padding:5px;
        }
  </style>
</head>

<body class="g-sidenav-show  bg-gray-200">
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <span class="ms-1 font-weight-bold text-white">Rohit's Ecommerce Website</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
      <li class="main">
          <a class="nav-link text-white " href="../pages/dashboard.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            </div>
            <span class="nav-link-text ms-1">First page</span>
          </a>
        </li>
        <li class="main">
          <a class="nav-link text-white " href="add_category.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            </div>
            <span class="nav-link-text ms-1">Add Category</span>
          </a>
        </li>
        <li class="main">
          <a class="nav-link text-white " href="category.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            </div>
            <span class="nav-link-text ms-1">All Categories</span>
          </a>
        </li>
        <li class="main">
          <a class="nav-link text-white " href="products.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            </div>
            <span class="nav-link-text ms-1">Product's</span>
          </a>
        </li>
        <li class="main">
          <a class="nav-link text-white " href="add_products.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            </div>
            <span class="nav-link-text ms-1">Add Product's</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="main ">
      <div class="mx-3">
        <a class="btn bg-gradient-primary mt-4 w-100" href="https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree" type="button">Upgrade to pro</a>
      </div>
    </div>
  </aside>
 <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
              <label class="form-label">Type here...</label>
              <input type="text" class="form-control">
            </div>
          </div>
          
        </div>
      </div>
    </nav>
 
<div class="container">
    <h1>Add Category</h1>

 
      <?php
      if(isset($_SESSION['message']))
      {
         echo "Successfully registered";
      }
       ?>
 
   
<form id="reg" action="add_categorydata.php" method="post" enctype="multipart/form-data">
					<input style="background-color:wheat" class="text" type="text" name="name" placeholder="Enter Category Name" required="" size=50>
					<input  style="background-color:wheat" class="text email" type="text" name="slug" placeholder="Enter Slug" required="" size=50><hr>
					<textarea style="background-color:wheat" class="text" type="text" name="description" placeholder="Enter Description" required="" rows=3 cols="50"></textarea><hr>
					
                    <label>Upload Image:</label><input style="background-color:wheat" type="file" name="images" value=""><hr>

                    <input  style="background-color:wheat" class="text email" type="text" name="meta_title" placeholder="Enter Meta title" required="" size=90><hr>
                    <textarea style="background-color:wheat" class="text" type="text" name="meta_description" placeholder="Enter Meta Description" required="" rows=3 cols="50"></textarea><hr>

                    <input  style="background-color:wheat" class="text email" type="text" name="meta_keywords" placeholder="Enter Meta keywords" required="" size=90><hr>
                     <div class="col-md-6">
                    <label for="">Popular</label>
                    <input type="checkbox" name="popular"></div>
                   <div class="col-md-6">
                    <label for="">Status</label>
                    <input type="checkbox" name="status">
                   </div>


                    <div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input class="btn-primary" type="submit" name="save" value="Add">
          <div class="submit-success" data-submit=""></p>Registered successfully</p></div>
          <div class="submit-error" data-submit=""></p>Error</p></div>
       
				</form>
</div>
<footer class="footer pt-5">
      <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
         
          <div class="col-lg-12">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              
              <li class="nav-item">
                <a href="#" class="nav-link pe-0 text-muted" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link pe-0 text-muted" target="_blank">Services</a>
             </li>
             <li class="nav-item">
                <a href="#" class="nav-link pe-0 text-muted" target="_blank">Contact</a>
             </li><li class="nav-item">
                <a href="#" class="nav-link pe-0 text-muted" target="_blank">About</a>
</li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  
  </main>
 
  <script src="assets/js/bootstrap.bundle.js"></script>
  <script src="assets/js/perfect-scrollbar.min.js"></script>
  <script src="assets/js/smooth-scrollbar.min.js"></script>
</body>
</html>

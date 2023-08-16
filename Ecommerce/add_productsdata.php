<?php
include("config.php");

$valid_formats=array("jpg","jpeg","png","gif","JPG");
if(isset($_POST['save']))
{ 
    

    $category_name=$_POST['catname'];
	$name=$_POST['name'];
    $slug=$_POST['slug'];
    $small_description=$_POST['small_description'];
    $description=$_POST['description'];
    $original_price=$_POST['org_price'];
    $selling_price=$_POST['sell_price'];

    
   $image=$_FILES["pimage"]["name"];
   $path="imgup";
   
   $img_ext=pathinfo($image,PATHINFO_EXTENSION);
   $filename=time().'.'.$img_ext;
    $qty=$_POST['qty'];
    $status=isset($_POST['status']) ? '1':'0';
    $trending=isset($_POST['trending']) ? '1':'0';
;

    $meta_title=$_POST['meta_title'];
    $meta_keywords=$_POST['meta_keywords'];
    $meta_description=$_POST['meta_description'];
    
    echo "name";
	$query="INSERT INTO `products` (`category_name`, `name`, `slug`, `small_description`, `description`, `original_price`, `selling_price`, `image`, `qty`, `status`, `trending`, `meta_title`, `meta_keywords`, `meta_description`) VALUES ('$category_name', '$name', '$slug', '$small_description', '$description', '$original_price', '$selling_price', '$filename', '$qty', '$status', '$trending', '$meta_title', '$meta_keywords', '$meta_description')";
	
  
	if($DBcon->query($query))
	{
	    move_uploaded_file($_FILES['pimage']['tmp_name'],$path.'/'.$filename);
	
		header("location:products.php");

		$_SESSION['message']="Successfully Registered";
	}
			
		
 }
?>

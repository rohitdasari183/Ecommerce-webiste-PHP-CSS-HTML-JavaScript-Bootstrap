<?php
include("config.php");

$valid_formats=array("jpg","jpeg","png","gif","JPG");
if(isset($_POST['save']))
{ 
   


	$name=$_POST['name'];
    $slug=$_POST['slug'];
    $description=$_POST['description'];
    $status=isset($_POST['status']) ? '1':'0';
    $popular=isset($_POST['popular']) ? '1':'0';

   $image=$_FILES["images"]["name"];
   $path="imgup";
   
   $img_ext=pathinfo($image,PATHINFO_EXTENSION);
   $filename=time().'.'.$img_ext;

    $meta_title=$_POST['meta_title'];
    $meta_description=$_POST['description'];
    $meta_keywords=$_POST['meta_keywords'];

	$query="INSERT INTO category(name,slug,description,status,popular,image,meta_title,meta_description,meta_keywords) VALUES('$name','$slug','$description','$status','$popular','$filename','$meta_title','$meta_description','$meta_keywords')";
	

	if($DBcon->query($query))
	{
	    move_uploaded_file($_FILES['images']['tmp_name'],$path.'/'.$filename);
	
		header("location:add_category.php");

		$_SESSION['message']="Successfully Registered";
	}
			
		
 }
?>

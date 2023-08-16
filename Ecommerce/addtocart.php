<?php 
session_start();
include("config.php");
$valid_formats=array("jpg","jpeg","png","gif","JPG");

if($_SERVER['REQUEST_METHOD']=="POST")
{
    $a=$_POST['name'];
    $b=$_POST['price'];
    $c=$_POST['prod_name'];
    $d=$_POST['qual'];
    $e=$_POST['pimage'];

    $image=$_FILES["pimage"]["name"];
    $path="imgup";  
    $img_ext=pathinfo($image,PATHINFO_EXTENSION);
    $filename=time().'.'.$img_ext;

    $query="INSERT INTO cart(name,price,prod_name,qual,image) VALUES('$a','$b','$c','$d','$filename')";
    if($DBcon->query($query))
	{
	    move_uploaded_file($_FILES['pimage']['tmp_name'],$path.'/'.$filename);
	
		header("location:displaycart.php");

		$_SESSION['message']="Successfully Registered";
	}
		
}

?>
<html>
    <head>
        
    </head>
    <body>
        <form action="" method="POST" enctype="multipart/form-data">
        <input  style="background-color:wheat" class="text email" type="text" name="name" placeholder="Name of the Customer:" required="" size=50><hr></br></br>
					<input  style="background-color:wheat" class="text email" type="text" name="price" placeholder="Enter Price:" required="" size=50><hr></br></br>
                    <input  style="background-color:wheat" class="text email" type="text" name="prod_name" placeholder="Enter Product Name:" required="" size="50"></br></br>
                    <input  style="background-color:wheat" class="text email" type="text" name="qual" placeholder="Enter Quantity:" required="" size="50"><br></br>
                    <label>Please upload the image of your selected product:</label><input style="background-color:wheat" type="file" name="pimage" value=""><hr>

            <input type="submit" value="submit" name="submit">
       </form>
       <script>
        window.confirm("Your item is successfully added to cart");
       </script>  
    </body>
</html>
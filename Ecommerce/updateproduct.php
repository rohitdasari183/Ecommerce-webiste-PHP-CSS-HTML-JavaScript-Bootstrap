
<?php
include("config.php");

$get=$_GET['update'];
if(isset($_POST['submit']))
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

    if($qryl==true)
    {
        echo "Successfull updated";
    }
    else
    {
        echo "not";
    }
}
   
$qry=$DBcon->query("SELECT * FROM cart WHERE id='$get' ");
while($row=mysqli_fetch_array($qry))
{
   ?>
         <form action="" method="POST" enctype="multipart/form-data">
        <input  style="background-color:wheat" class="text email" type="text" name="name" placeholder="Name of the Customer:" required="" size=50 value="<?php $row['name']  ?>"><hr></br></br>
					<input  style="background-color:wheat" class="text email" type="text" name="price" placeholder="Enter Price:" required="" size=50 value="<?php $row['price']  ?>"><hr></br></br>
                    <input  style="background-color:wheat" class="text email" type="text" name="prod_name" placeholder="Enter Product Name:" required="" size="50" value="<?php $row['prod_name']  ?>"></br></br>
                    <input  style="background-color:wheat" class="text email" type="text" name="qual" placeholder="Enter Quantity:" required="" size="50" value="<?php $row['qty']  ?>"><br></br>
                    <label>Please upload the image of your selected product:</label><input style="background-color:wheat" type="file" name="pimage">"<hr>

            <input type="submit" value="submit" name="submit">
       </form>

    <?php
}
?>




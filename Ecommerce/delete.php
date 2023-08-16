
<?php
include("config.php");

$get=$_GET['delete'];
if(isset($_POST['submit']))
{

    $name=$_POST['name'];
    $slug=$_POST['slug'];
    $description=$_POST['description'];
    $status=isset($_POST['status']) ? '1':'0';
    $popular=isset($_POST['popular']) ? '1':'0';

    $image=$_FILES['images']['name'];
    $path="imgup";
    $img_ext=pathinfo($image,PATHINFO_EXTENSION);
    $filename=time().".".$img_ext;

    $meta_title=$_POST['meta_title'];
    $meta_description=$_POST['description'];
    $meta_keywords=$_POST['meta_keywords'];

 
    $qryl=$DBcon->query("DELETE FROM category WHERE id='$get' ");

    if($qryl==true)
    {
        echo "Successfull deleted";
    }
    else
    {
        echo "not";
    }
}
   
$qry=$DBcon->query("SELECT * FROM category WHERE id='$get' ");
while($row=mysqli_fetch_array($qry))
{
   ?>
   <form action="" method="post" enctype="multipart/form-data">
					<input style="background-color:wheat" class="text" type="text" name="name" placeholder="Enter Category Name" required="" size=50 value="<?=$row['name']; ?>">
					<input  style="background-color:wheat" class="text email" type="text" name="slug" placeholder="Enter Slug" required="" size=50 value="<?=$row['slug']; ?>"><hr>
					<textarea style="background-color:wheat" class="text" type="text" name="description" placeholder="Enter Description" required="" rows=3 cols="50" value="<?=$row['description']; ?>"></textarea><hr>
					
                    <label>Upload Image:</label><input style="background-color:wheat" type="file" name="images" ><hr>

                    <input  style="background-color:wheat" class="text email" type="text" name="meta_title" placeholder="Enter Meta title" required="" size=90 value="<?=$row['meta_title']; ?>"><hr>
                    <textarea style="background-color:wheat" class="text" type="text" name="meta_description" placeholder="Enter Meta Description" required="" rows=3 cols="50" value="<?=$row['meta_description']; ?>"></textarea><hr>

                    <input  style="background-color:wheat" class="text email" type="text" name="meta_keywords" placeholder="Enter Meta keywords" required="" size=90 value="<?=$row['meta_keywords']; ?>"><hr>
                     <div class="col-md-6">
                    <label for="">Popular</label>
                    <input type="checkbox" name="popular" value="<?=$row['popular']; ?>"></div>
                   <div class="col-md-6">
                    <label for="">Status</label>
                    <input type="checkbox" name="status" value="<?=$row['status']; ?>">
                   </div>


                    <div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit" name="submit" value="Delete">
				</form>

    <?php
}
?>




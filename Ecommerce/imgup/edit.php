
<?php
include("config.php");

$get=$_GET['edit'];
if(isset($_POST['submit']))
{

    $name=$_POST['name'];
    $slug=$_POST['slug'];
    $description=$_POST['description'];
    $status=isset($_POST['status']) ? '1':'0';
    $popular=isset($_POST['popular']) ? '1':'0';

    $image=$_FILES['images']['name'];
    $path="imgup";
    $image_ext=pathinfo($image,PATHINFO_EXTENSION);
    $filename=time().".".$image_ext;

    $meta_title=$_POST['meta_title'];
    $meta_description=$_POST['description'];
    $meta_keywords=$_POST['meta_keywords'];

    $qryl=$DBcon->query("UPDATE category SET name='$name', slug='$slug' ,description='$description' ,status='$status',popular='$popular' ,image='$filename' ,meta_titles='$meta_titles', meta_description='$meta_desccription' meta_keywords='$meta_keywords' WHERE id='$get' ");

    if($qryl==true)
    {
        echo "Successfull updated";
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
					<input type="submit" name="submit" value="Save">
				</form>

    <?php
}
?>




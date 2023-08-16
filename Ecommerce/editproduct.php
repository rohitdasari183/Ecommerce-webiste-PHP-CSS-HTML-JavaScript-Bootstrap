
<?php
include("config.php");

$get=$_GET['edit'];
if(isset($_POST['submit']))
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
   $filename=time().'.'.$img_ext
     $qty=$_POST['qty'];
    $status=isset($_POST['status']) ? '1':'0';
    $trending=isset($_POST['trending']) ? '1':'0';
;

    $meta_title=$_POST['meta_title'];
    $meta_keywords=$_POST['meta_keywords'];
    $meta_description=$_POST['meta_description'];
    



    $qryl=$DBcon->query("UPDATE category SET category_name='$category_name',name='$name', slug='$slug' ,small_description='$small_description',description='$description' ,original_price='$original_price',selling_price='$selling_price',image='$filename' ,qty='$qty' ,status='$status',trending='$trending' ,meta_title='$meta_title', meta_keywords='$meta_keywords',meta_description='$meta_description' WHERE id='$get' ");

    if($qryl==true)
    {
        echo "Successfull updated";
    }
    else
    {
        echo "not";
    }
}
   
$qry=$DBcon->query("SELECT * FROM products WHERE id='$get' ");
while($row=mysqli_fetch_array($qry))
{
   ?>
<form action="" method="post" enctype="multipart/form-data">

<label for="catname">Choose Cateogory</label>
<select class="form-select" name="catname" value="<?php $row['catname'] ?>">
   <option value="mobile">Mobile</option>
   <option value="tv">TV</option>
   <option value="cooler">Cooler</option>
   <option value="refrigerator">Refrigerator</option>
   <option value="ac">AC</option>
   <option value="ovan">Ovan</option>
   <option value="shoes">Shoes</option>
   <option value="shirts">Shirts</option>
   <option value="headphones">HeadPhone</option>


</select><br></br>
<input style="background-color:wheat" class="text" type="text" name="name" placeholder="Enter Product Name" required="" size=50 value="<?php $row['name'] ?>">

<input  style="background-color:wheat" class="text email" type="text" name="slug" placeholder="Enter Slug" required="" size=50 value="<?php $row['slug'] ?>"><hr>
<textarea style="background-color:wheat" class="text" type="text" name="small_description" placeholder="Enter Small Description" required="" rows=3 cols="50" value="<?php $row['small_description'] ?>"></textarea><hr>
<textarea style="background-color:wheat" class="text" type="text" name="description" placeholder="Enter Description" required="" rows=3 cols="50" value="<?php $row['description'] ?>"></textarea><hr>
<input  style="background-color:wheat" class="text email" type="text" name="org_price" placeholder="Enter Original Price" required="" size=50 value="<?php $row['original_price'] ?>"><hr>
<input  style="background-color:wheat" class="text email" type="text" name="sell_price" placeholder="Enter Selling Price" required="" size=50 value="<?php $row['selling_price'] ?>"><hr>

<label>Upload Image:</label><input style="background-color:wheat" type="file" name="pimage" value=""><hr>
<input  style="background-color:wheat" class="text email" type="text" name="qty" placeholder="Enter Quantity" required="" size=50 value="<?php $row['qty'] ?>"><hr>
<div class="col-md-6">
<label for="">Status</label>
<input type="checkbox" name="status" value="<?php $row['status'] ?>"></div>
<div class="col-md-6">
<label for="">Trending</label>
<input type="checkbox" name="trending" value="<?php $row['trending'] ?>">
</div>

<input  style="background-color:wheat" class="text email" type="text" name="meta_title" placeholder="Enter Meta title" required="" size=90 value="<?php $row['meta_title'] ?>"><hr>
<textarea style="background-color:wheat" class="text" type="text" name="meta_keywords" placeholder="Enter Meta Keywords" required="" rows=3 cols="50" value="<?php $row['meta_keywords'] ?>"></textarea><hr>

<textarea style="background-color:wheat" class="text" type="text" name="meta_description" placeholder="Enter Meta Description" required="" rows=3 cols="50" value="<?php $row['meta_description'] ?>"></textarea><hr>



<div class="wthree-text">
    <label class="anim">
        <input type="checkbox" class="checkbox" required="">
        <span>I Agree To The Terms & Conditions</span>
    </label>
    <div class="clear"> </div>
</div>
<input type="submit" name="submit" value="Update">
</form>

    <?php
}
?>




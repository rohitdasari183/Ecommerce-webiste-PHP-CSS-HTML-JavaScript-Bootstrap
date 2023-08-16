
<?php
include("config.php");

$get=$_GET['view'];
if(isset($_POST['submit']))
{
   
   
  
   
        $r=$_POST['prod_name'];
        $a=$_POST['name'];
        $b=$_POST['email'];
        $c=$_POST['phone'];
        $d=$_POST['pincode'];
        $e=$_POST['address'];
    
        $tracking_id="RoEcom".rand(1111,9999).substr($c,2);
        $user_id=substr($a,3).rand(111,999);
        $f=$_POST['total_price'];
        $g=$_POST['payment_mode'];
        $payment_id="RoEcom".rand(1111,9999).substr($f,3);
        $h=$_POST['status'];
        $i=$_POST['comments'];
    
        $query=$DBcon->query("INSERT INTO `orders` (`prod_name`, `tracking_id`, `user_id`, `name`, `email`, `phone`, `address`, `pincode`, `total_price`, `payment_mode`, `payment_id`, `status`, `comments`) VALUES ('$tracking_id', '$user_id', '$a', '$b', '$c', '$e', '$d', '$f', '$g', '$payment_id', '$h', '$i');");
     
        if($qryl==true)
        {
            header("location:yourorders.php");
        }
        else
        {
            echo "not";
        }
    
    
    
    
}
    
   

   
$qry=$DBcon->query("SELECT * FROM orders WHERE id='$get' ");
while($row=mysqli_fetch_array($qry))
{
   ?>
        <form action="" method="POST">
      <h1> Your Order Details </h1>
    

      <input style="background-color:wheat" class="text" type="text" name="prod_name" placeholder="Enter Prodcut Name" required="" size=50 value="<?php $row['prod_name'] ?>"></br></br>

                    <input style="background-color:wheat" class="text" type="text" name="name" placeholder="Enter Your Name" required="" size=50 value="<?php $row['name'] ?>"></br></br>

					<input  style="background-color:wheat" class="text email" type="text" name="email" placeholder="Enter Email Address" required="" size=50 value="<?php $row['email'] ?>"><hr>
					<input style="background-color:wheat" class="text" type="text" name="phone" placeholder="Enter Phone Number" required="" value="<?php $row['phone'] ?>"><hr>
                    <input style="background-color:wheat" class="text" type="text" name="pincode" placeholder="Enter Pincode" required="" value="<?php $row['pincode'] ?>" ><hr>
					<textarea style="background-color:wheat" class="text email" type="text" name="address" placeholder="Enter Your Address" required="" size=50 rows=3 cols="50" value="<?php $row['address'] ?>"></textarea><hr><br>
					<input  style="background-color:wheat" class="text email" type="text" name="total_price" placeholder="Enter Exact Price of item" required="" size=50 value="<?php $row['total_price'] ?>"><hr>
                    <input  style="background-color:wheat" class="text email" type="text" name="qty" placeholder="Enter Quantity of items" required="" size=50 value="<?php $row['qty'] ?>"><hr>


                    <label for="payment_mode">Choose Mode</label>
                    <select class="form-select" name="payment_mode" value="<?php $row['payment_mode'] ?>">
                       <option value="online">Online</option>
                       <option value="offline">Offline</option>
                   
                    </select><br></br>

                    <label for="">Status</label>
                    <input type="checkbox" name="status" value="<?php $row['status'] ?>"></div>
         

                    <textarea style="background-color:wheat" class="text" type="text" name="comments" placeholder="Any Comments" required="" rows=3 cols="50" value="<?php $row['comments'] ?>"></textarea><hr>
                  


                    <div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label></br></br>
						<div class="clear"> </div>
					</div>
					<input style="background-color:blue;color:white" type="submit" name="submit" value="Update">

</form>


    <?php
}
?>




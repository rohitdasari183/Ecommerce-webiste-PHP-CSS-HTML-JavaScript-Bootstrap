<html>
    <head>
        <style>
            body{
                background-color:wheat;
                color:black;
            }
             *{
        font-family:'Roboto',sans-serif;
        font-size:50px;
    }
    .text-danger{
        color:red;
    }
    .text-success{
        color:green;
    }
    .btn-primary{
        background-color:blue;
        color:white;
    }
    .btn-secondary{
        background-color:red;
        color:white;
    }
        </style>
    </head>
</html>
<?php
include("config.php");

$get=$_GET['view'];

   
$qry=$DBcon->query("SELECT * FROM products WHERE id='$get' ");
while($row=mysqli_fetch_array($qry))
{
   ?>
<tr>
     
        <td><?php echo $row['name'];?></td></br></br>
        <span> <?php if($row['trending'])echo "Trending"; else echo "Top 15"; ?></span></br></br>
        <td><img src="imgup/<?=$row['image']; ?>" width="500px" height="600px" alt="<?=$row['name']; ?>"></td></br></br>
        <td>Mobile Information:<p><?php echo $row['small_description'];?></p></td></br></br>
        <td>Selling Price: Rs<em class="text-success"><?php echo $row['selling_price'];?></em></td>

        <td>Original Price: Rs<s class="text-danger"><?php echo $row['original_price'];?></s></td></br></br>
<div class="input-group">
<label for="qual">Choose Quality</label>
                    <select class="form-select" name="qual">
                       <option value="1">1</option>
                       <option value="2">2</option>
                       <option value="3">3</option>
                       <option value="4">4</option>
                       <option value="5">5</option>
                       <option value="6">6</option>
                       <option value="7">7</option>
                       <option value="8">8</option>
                       <option value="9">9</option>
                       <option value="10">10</option>



                    </select><br></br>
</div>
        <td>Features:<p><?php echo $row['description'];?></p></td></br></br>
      <button ><a class="btn-primary" href="addtocart.php">Add to Cart</a></button>
      <button><a href="buy.php">Buy</a></button>





 



        
       
    

    </tr>

    <?php
}
?>




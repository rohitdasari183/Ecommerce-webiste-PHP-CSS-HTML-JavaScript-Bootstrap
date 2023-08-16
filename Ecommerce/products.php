<?php
include("c2header.php");

?>
<?php
include("config.php");
?>
<div class="container">
    <h2>Display Products</h2>
    <?php 
    $qry=$DBcon->query("SELECT * FROM ecommerce.products");

    echo "<table border='7' height='200px' width='1000px' align='center' >

    <tr>
    <th>ID</th>
    <th>Category Name</th>
	<th>Image</th>

 
    <th>Status</th>
    <th>Edit</th>
    <th>Delete</th>
    <th>View</th>


    




     </tr>";
while($row = mysqli_fetch_array($qry))
{

   ?><tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['name'];?></td>
        <td><img src="imgup/<?=$row['image']; ?>" width="80px" height="80px" alt="<?=$row['name']; ?>"></td>
        <td><?php echo $row['status']=='0' ? "Visible":"Hidden";?></td>

        <td><a href="editproduct.php?edit=<?php echo $row['id'];?>"><button>Edit</button></a></td>
        <td><a href="deleteproduct.php?delete=<?php echo $row['id'];?>"><button>Delete</button></a></td>
        <td><a href="viewproduct.php?view=<?php echo $row['id'];?>"><button>View</button></a></td>



        
       
    

    </tr>
  <?php
}
echo "</table>";


?>

</div>
<?php
include("c2footer.php");
?>

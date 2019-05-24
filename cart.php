<?php
	$servername="localhost";
    $username="root";
    $password="";
    $dbname="registration";
	$conn=new mysqli($servername,$username,$password,$dbname);
   
   echo $id=$_GET['id'];
   $query="SELECT * FROM  adding_db where id='$id'";
   $run=mysqli_query($query);
   while($row=mysqli_fetch_array($run))
   {
        $id=$row[0];
		$image=$row[2];
		$item_name=$row[3];
		$item_price=$row[4];
  $query="insert in to cart_db(id,qty,price) values($id,$item_image,$item_price,$item_total)"
 
	?>
	<?php
	}
	?>
	
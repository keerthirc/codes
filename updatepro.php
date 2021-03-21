<?php
session_start(); 
include "db_conn.php";

?>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="login-box">
  <div class="tabcontent`">
	 <div id="login">
     <form action="#" method="post">
     	<h2>UPDATE</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	            <div class="textbox">

                             	<input type="text" 
                 name="id" 
                 placeholder="ID"><br> 
				 </div>
				 
				 
				 
                  <div class="textbox">
                 <?php if (isset($_GET['item'])) { ?>
               <input type="text" 
                      name="item" 
                      placeholder="ITEM" required 
                      value="<?php echo $_GET['item']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="item" 
                      placeholder="ITEM" required><br>
          <?php }?>   
                            
    </div>
					   <div class="textbox">

                             	<input type="text" 
                 name="quantity" 
                 placeholder="quantity"><br> 
				 </div>
				 
				  <div class="textbox">

                 <input type="text" 
                 name="price" 
                 placeholder="price"><br> 
				 </div>
				 <button type="submit" name="submit" value="submit" id="submit">
     	<p>UPDATE </p>
   	</button>
	
            <button type="submit"><a href="adminhome.php" class="ca">BACK</button></a>
   	</button>
		  <?php

	if(isset($_POST['submit']))
	{ 
	   $id=$_POST['id'];
	  $item=mysqli_real_escape_string($conn,$_POST['item']);
	  $quantity=mysqli_real_escape_string($conn,$_POST['quantity']);
	  $price=mysqli_real_escape_string($conn,$_POST['price']);
	  $sql_query="UPDATE  sales set item='$item',quantity='$quantity',price='$price' where  id='".$id."'";
	  $result=mysqli_query($conn,$sql_query);
	  if($result){
	     echo  " updated";}
		   else{
		   echo "error";
	  }
	  }
	
	
mysqli_close($conn);
?>
		  
	    
     </form></div></div></div>
</body>
</html>
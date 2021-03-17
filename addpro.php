
<?php
session_start(); 
include "db_conn.php";
?>

<!DOCTYPE html>
<html>
  <head>
         <title>Add item</title>
       <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <div class="login-box">
  <div class="tabcontent`">
	 <div id="login">
  <form action="#" method="POST">
  <h1>ADD ITEM</h1>
   

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
     	<p>ADD </p>
   	</button>
	
            <button type="submit"><a href="adminhome.php" class="ca">BACK</button></a>
   	</button>
		<p>
		  <?php
		
		if(isset($_POST['submit']))
		{
		 $item=$_POST['item'];
		 $quant=$_POST['quantity'];
		 $price=$_POST['price'];
		 $qry="insert into  sales(item,quantity,price)values('$item','$quant','$price')" ;
		 if(mysqli_query($conn,$qry))
		 {
		 echo "Successfully added";  
		        
         }
		 else 
		 {
		 echo "Error";
		 }
		 }
		 mysqli_close($conn);
		?>
	</p>
		
  </form>
</body>
</html>	
         
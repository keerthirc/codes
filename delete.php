<?php
session_start(); 
include "db_conn.php";

?>
<html>
<head>
	<title>Delete Account</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="login-box">
  <div class="tabcontent`">
	 <div id="login">
     <form action="#" method="post">
     	<h2>Delete Account </h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<div class="textbox">
     	<input type="text" name="uname" placeholder="User Name" id="user"><br></div>
        


     	<button type="submit" name="submit" value="submit" id="submit">Delete</button>
		
            <button type="submit"><a href="signup.php" class="ca">Back</button></a>
		
		
		<?php


if(isset($_POST['submit']))
{
 $user=mysqli_real_escape_string($conn,$_POST['uname']);

$sql_query = " DELETE FROM users WHERE   user_name='".$user."'";


$result=mysqli_query($conn,$sql_query);
	  if($result){
	     echo  " Deleted Successfully";}
		   else{
		   echo "error";
	            }
	  }



	
	 
mysqli_close($conn);
?>
         
     </form></div></div></div>
</body>
</html>
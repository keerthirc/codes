<?php
session_start(); 
include "db_conn.php";

?>
<html>
<head>
	<title>RESET PASSWORD</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="login-box">
  <div class="tabcontent`">
	 <div id="login">
     <form action="#" method="post">
     	<h2>RESET PASSWORD</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<div class="textbox">
     	<input type="text" name="uname" placeholder="User Name" id="user"><br></div>
        <div class="textbox">
		
     	<input type="password" name="pass1" placeholder="New Password" id="upass"></div>


     	<button type="submit" name="submit" value="submit" id="submit">reset</button>
			
		 
            <button type="submit"><a href="signup.php" class="ca">Back</button></a>
		
		<p>
		  <?php

	if(isset($_POST['submit']))
	{
	  $user=mysqli_real_escape_string($conn,$_POST['uname']);
	  $newpassword=mysqli_real_escape_string($conn,$_POST['pass1']);
	  if($user !="" && $newpassword != ""){
	  $sql_query="UPDATE  users set password='$newpassword' where  user_name='".$user."'";
	  $result=mysqli_query($conn,$sql_query);
	  if($result){
	     echo  " password updated";}
		   else{
		   echo "error";
	  }
	  }}
	
	
mysqli_close($conn);
?>
		  
	    >
     </form></div></div></div>
</body>
</html>
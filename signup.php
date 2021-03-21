<!DOCTYPE html>
<html>
  <head>
         <title></title>
         <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <div class="login-box">
  <div class="tabcontent`">
	 <div id="login">
  <form action="signupcheck.php" method="POST">
      <h1>Register</h1>
      <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

              <div class="textbox">

                          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name" required 
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name" required><br>
          <?php }?>   
                            
                       </div>
					   <div class="textbox">

                             	<input type="password" 
                 name="password" 
                 placeholder="Password"><br> 
				 </div>
				
         <div class="textbox">
         
          <input type="password" 
                 name="re_password" 
                 placeholder="Re_Password"><br>
    </div>

     	<button type="submit">
     	<p> Sign Up</p>
     	</button>
          <p>&nbsp;</p>
          <p>Forgot password? </p> 
            <button type="submit"><a href="resetpass.php" class="ca">Reset</button></a>
			<p>&nbsp;</p>
          <p>Delete Account </p> 
            <button type="submit"><a href="delete.php" class="ca">Delete</button></a>
			
		
         
		  
		 
          
  </form>
</body>
</html>
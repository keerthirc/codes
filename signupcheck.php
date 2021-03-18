<?php
session_start(); 
include "db_conn.php";

       if(isset($_POST['submit']))
        {	
			$user=$_POST['uname'];
            $pass=$_POST['password'];
			$qry=mysqli_query($conn,"select * from users where user_name='$user' and password='$pass'");
 			$res=mysqli_fetch_array($qry);
        	if($res)
			{$_SESSION['id']=$res['id'];
			$_SESSION['user_name']=$res['user_name'];
			$_SESSION['password']=$res['password'];
			
			 $_SESSION['type']=$res['type'];
			 if($res['type']=='admin')
			{
				header('location:adminhome.php');
			}
			elseif($res['type']=='user')
			{
				header('location:userhome.php');
			}
			elseif($res['type']=='editor')
			{
				header('location:editorhome.php');
			}
			else
			{   
				 echo("User Name is required");
	             exit();
			}
		}
		else
		{
		  echo ("Invalid");
		  }
		mysqli_close($conn);
	 }
	 
?>
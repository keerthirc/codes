<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['re_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	$re_pass = validate($_POST['re_password']);
	
	$user_data = 'uname='. $uname;


	if (empty($uname)) {
		echo ("User Name is required");
	    exit();
	}else if(empty($pass)){
         echo ("Password is required");
	    exit();
	}
	else if(empty($re_pass)){
         echo ("Re Password is required");
	    exit();
	}
	else if($pass !== $re_pass){
        echo("User Name is required");
	    exit();
	}

	else{

		

	    $sql = "SELECT * FROM users WHERE user_name='$uname' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			echo ("The username  $uname is taken try another");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(user_name, password) VALUES('$uname', '$pass')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	  echo ("$uname Your account has been created successfully");
			  exit();
           }else {
	           	  echo ("unknown error occurred");
		        exit();
           }
		}
	}
	
}else{
	header("Location: signup.php");
	exit();
}
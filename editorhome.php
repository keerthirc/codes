<?php 
session_start(); 
include "db_conn.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>Editor home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
  background: url(k.jpg) no-repeat;
  background-size: cover;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.Estilo2 {color: #FFFFFF}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onClick="closeNav()">&times;</a>
  <a href="adminhome.php">HOME</a>
  <a href="updatepro.php">UPDATE</a>
  <a href="logout.php">LOGOUT</a></div>

<h1> <center>
  <p>&nbsp;</p>
  <p><span class="Estilo2">PRODUCT CATALOG</span></p>
  </center> </h1>
<p>&nbsp;</p>
<p><span style="font-size:30px;cursor:pointer" onClick="openNav()">&#9776;<span class="Estilo2">MENU</span></span></p>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
    </script>


 <div class="container">
 <div class="col-lg-12">
 <br><br>
 
 <center>
 <table bordercolor="#000000"  class=" table table-striped table-hover table-bordered"  id="tabledata">
  
 <tr class="bg-dark text-white text-center">
 <th width="95" height="21" ><span class="Estilo2">ID</span></th>
 <th width="95" height="21"><span class="Estilo2">ITEM</span></th>
 <th width="117"><span class="Estilo2">QUANTITY</span></th>
 <th width="152"><span class="Estilo2">PRICE</span></th>
 

 </tr >
 <td height="40"></center>

 <?php


$q = "select * from sales ";
 $query = mysqli_query($conn,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td  align="center" height="48"> <?php echo $res['id'];  ?> </td>
 <td  align="center" height="48"> <?php echo $res['item'];  ?> </td>
 <td align="center"> <?php echo $res['quantity'];  ?> </td>
 <td align="center"> <?php echo $res['price'];  ?> </td>
 

 </tr>

 <?php 
 }
  ?>
 
 </table>  

 </div>
 </div>

 <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script></body>
</html>
    
    
  
    
  

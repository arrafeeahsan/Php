<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php include 'style.php';?>
  <header>
  <h2>GG Cloathing</h2>
  <h1 ></h1>  
  <?php
session_start();
session_destroy();
echo "You have been Logged out Sucessfully.<br> click here to <a href='login.php'> Login again </a> ";
?>
 
</div>
</header>
<div >

<footer>
  <p>Copyright <span>&#169;</span> GG Cloathing</p>
</footer>
</body>
</html>


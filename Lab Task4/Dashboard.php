<!DOCTYPE html>
<html>
<head>
  <style >
 

  </style>
</head>
<body>
 
   <?php include 'style.php';?>
  <header>
  <h2>GG Cloathing</h2>
  <h1 ></h1>  
  
  <div >
    
     <?php
      session_start();

echo "Logged in as ". $_SESSION['username'];
echo " | <a href='logout.php'> Logout </a>" ;
?>
 
</div>
</header>
  <?php include 'sidebar.php';?>

  
</div>
 <div class="main">
    <h1>Welcome <?php 
   
     echo " ". $_SESSION['username'];

    ?></h1>
  </div>
<footer>
  <p>Copyright <span>&#169;</span> GG Cloathing</p>
</footer>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
  <style >
   
  </style>
</head>
<body>
   
   <?php include 'design.php';?>

  <div class="jumbotron text-center">
  <h2>AS Clothing</h2>

  
  <div >
    
     <?php
      session_start();


echo "Logged in as ". $_SESSION['email'];

?>


</div>
 <?php include 'navbar.php';?>
</div>
  

  
</div>

 <div >
    <h1>Welcome <?php 
   
     echo " ". $_SESSION['name'];


    ?></h1>
    <br><br><br>
    
  </div>


<footer>
  <p>Copyright <span>&#169;</span> AS Clothing</p>
</footer>
</div>
</body>
</html>
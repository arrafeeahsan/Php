<!DOCTYPE html>
<html>
<head>
	<title>VIEW PROFILE</title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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

<div class="main">
    <h2>Profile Info</h2>
    <?php include 'dbcon.php';?>
    <?php

      $email=$_SESSION['email'];
     $email_sch="SELECT * FROM users WHERE email='$email' ";

  

  $query=mysqli_query($con,$email_sch);
  $email_count=mysqli_num_rows($query);
   

    if ($email_count) {
    ?>
    <table cellpadding="7px" class="table table-striped">
        <thead>
        	<th rowspan=8 align="center">ID</th>

        <th>Name</th>
        <th>User Name</th>
        <th>Email</th>
        
       
        </thead>
        <tbody>
        	
        	
       	    <?php
        	while($row=mysqli_fetch_assoc($query)){
       	    ?>
            <tr>
         
      <td><?php echo $row['id']; ?></td>
                <td ><?php echo $row['name']; ?></td>
                <td><?php echo $row['username']; ?></td>
                 <td><?php echo $row['email']; ?></td>
                
            
            </tr>
           <?php }
       }
       ?>
        </tbody>
    </table>
</div>

<br>
<footer>
  <p>Copyright <span>&#169;</span>AS Clothing</p>
</footer>
</body>
</html>

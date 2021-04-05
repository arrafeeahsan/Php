<?php
session_start();
?>


<!DOCTYPE html> 
<html> 
<head>
    
</head>
<body>
<?php include 'design.php';?>


  <div class="jumbotron text-center">
  <h2>AS Clothing</h2>
  <h1 ></h1>  
  
  <div class="topnav btn-group" role="group" aria-label="Basic example">
  <a class="btn btn-info" href="Home.html" > Home </a> <br>
  <a class="btn btn-secondary" href="login.php">Login </a><br>
  <a class="btn btn-light" href="registration.php">Registration </a>
 
</div>
</div>

 <div class="container">
<form method="post" action="loginValidate.php">
    <fieldset>

        <legend> <b> <font size="5px">Login  </font> </b> </legend>
        <table cellpadding="7px" >
            <tr>
                <td > Email   </td>
                

                <td><input type="text" name="email"/></td>
            </tr>

            <tr>
                <td>Password </td>
        
                <td><input type="password" name="password"/></td> <br>
                
            </tr>

        </table>
        <hr>
        
       
        <input class="btn btn-outline-secondary" type="submit" name="submit" value="submit"> 
    
</form>
</div>

<br>
<footer>
  <p>Copyright <span>&#169;</span> AS Clothing</p>
</footer>
</div>
</body>
</html>
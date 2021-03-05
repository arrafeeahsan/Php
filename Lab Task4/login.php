
<!DOCTYPE html> 
<html> 
<head>
    
</head>
<body>
<?php include 'style.php';?>
  <header>
  <h2>GG Cloathing</h2>
  <h1 ></h1>  
  
  <div >
  <a  href="Home.html" > Home </a> 
  <a href="Login.php">Login </a>
  <a href="Store.php">Registration </a>
 
</div>
</header>
<div >
 
<form method="post" action="authenticate.php">
    
        <legend> <b> <font size="5px">Login  </font> </b> </legend>
        <table>
            <tr>
                <td > User Name   </td>
                

                <td><input type="text" name="name"/></td>
            </tr>

            <tr>
                <td>Password </td>
        
                <td><input type="password" name="password"/></td> <br>
                
            </tr>

        </table>
        <hr>
        <input type="checkbox" name="rm">Remember Me 
        <br><br>
        <input type="submit" name="submit" value="submit"> <a href=""> Forgot Password?</a>
    
    
</form>
</div>


<footer>
  <p>Copyright <span>&#169;</span> GG Cloathing</p>
</footer>

</body>
</html>
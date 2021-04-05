 
<!DOCTYPE html>  
 <html>  
      <head>  
            
          <title>Registration</title>
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
     
 <div >  
                              
 <form method="post" action="RegistrationValidate.php">  
                      
                  
  <fieldset>
    <legend> <b> <font size="5px">Customer Registration  </font> </b> </legend>
    <fieldset>

    <table>
    
      <tr >

        <td>Name</td>

        <td  ><input type="text" name="name"/></td>
       
         
      </tr>

        <tr>
        <td > User Name   </td>
       

        <td><input type="text" name="username"/></td>
        
          
      </tr>   

      <tr>
        <td>Email</td>

        <td><input type="text" name="email"></td>
        
      </tr>
      

      <tr>
        <td>Password </td>
        
        <td><input type="password" name="password"/></td> <br>
        
      </tr>

      <tr>
        <td>Confrim Password </td>
       
        <td><input type="password" name="curr_password"/></td> <br>
      </tr>

    </table>
    </fieldset>
        
    <hr>
    
    <br>
    <table>
      <tr>
        <td>
          <input class="btn btn-outline-secondary" type="submit" name="submit" value="Submit"> 
     <input class="btn btn-outline-dark" type="reset" value="Reset">
        </td>
      </tr>

    </table>
    
  </fieldset>                   
                      
                  
                </form>  
           </div>  
           <br /> 
            <footer>
  <p>Copyright <span>&#169;</span> AS Clothing</p>
</footer> 
      </body>  
 </html>  
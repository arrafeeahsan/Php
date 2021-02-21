
<!DOCTYPE html> 
<html> 
<head>
      <style>
     .error {color: red}
     .in{

  height: 105px;
  width: 170px;
  float: left;
  margin-bottom: 5px;
}

.la{
  height: 100px;
  width: 125px;
  float: left;
   line-height: 24px;

}



     </style>
</head>
<body>

    <?php 
    $nameErr = $passwordErr = "" ;
    $name = $password = "" ;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
 if (empty($_POST["name"])) {
    $nameErr = "Name is required ";
  } 
  elseif(strlen($name)<= 2) {
     $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)){
    $nameErr = "Name must be from letters, dashes, spaces and must not start with dash";

}
  }
 if(!empty($_POST["password"])) {
    $password = test_input($_POST["password"]);
    
    if (strlen($_POST["password"]) <= '8') {
        $passwordErr = "Your Password Must Contain At Least 8 Characters!";
    }
   
     elseif (!preg_match("/\W/",$password )) {
      $passwordErr = "Password must contain At Least 1 special charecter!";
    }
    
}
else {
     $passwordErr = "Please enter password   ";
}
  
   
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

    ?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <fieldset>
    <legend> <b> Login   </b> </legend>
    
        <label for="name" > <b> User Name </b>   </label> 
        <input type="text" name="name"/> 
   
    <span class="error"><?php echo $nameErr;?></span>
    
     <br>
       <label for="password" > <b> Password </b>   </label> 
         
          <input type="password" name="password"/>
         
      <span class="error"><?php echo $passwordErr;?></span>
    <hr>
    <input type="checkbox" name="rm">Remember Me 
        <br><br>
        <input type="submit" name="submit" value="Submit"> <a href=""> Forgot Password?</a>
    
  </fieldset>

</form>
<?php 
echo "<br>";
echo "OUPUT : ";
echo "<br>";
echo $name; 
echo "<br>";
echo $password; 
 ?>
</body>
</html>

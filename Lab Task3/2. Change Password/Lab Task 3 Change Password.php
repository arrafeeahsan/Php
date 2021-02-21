<!DOCTYPE html>
<html>
<head>
      <style>
      .error {color: red;}
   
}

     </style>
</head>
<body>

  <?php

     $currPassword = $newPassword= $retypeNewPassword= " ";
     $currPasswordErr = $newPasswordErr =  $retypeNewPasswordErr = "" ;

     
if ($_SERVER["REQUEST_METHOD"] == "POST"){

  if (empty($_POST["currPassword"]) ) {
   
    $currPasswordErr="current password can not empty";
}
    elseif ( (!empty($_POST["currPassword"]  != $_POST["newPassword"])) && ($_POST["newPassword"]==$_POST["retypeNewPassword"]) ){
    
      $currPassword=test_input($_POST["currPassword"]);
      $newPassword=test_input($_POST["newPassword"]);
      $retypeNewPassword = test_input($_POST["retypeNewPassword"]);

       
    }

     elseif ($_POST["newPassword"] != $_POST["retypeNewPassword"]) {
        $retypeNewPasswordErr=" Current and Retype Password not matches";
      

 
    }
    else{
      $retypeNewPasswordErr="Current and new password can not be same ";
    }
    
  }

   

  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

    ?>



 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"?>
  <fieldset>
    <legend> <b> <font size="5px">Change Password  </font> </b> </legend>
  
     
      <label>Current Password  </label>  
        
     <input  c type="password" name="currPassword"/><span class="error"><?php echo $currPasswordErr;?></span>
   
        <br><label> New Password  </label> 
       
      <input  type="password" name="newPassword"/> <br><span class="error"><?php echo $newPasswordErr;?></span>
  
    <label> Retype New Password </label>
        
    <input type="password" name="retypeNewPassword"/><span class="error"><?php echo $retypeNewPasswordErr;?></span>
        
  

    
    <hr>
    
    <br>
    <input type="submit" name="submit" value="Submit" > 
  </fieldset>
</form>
<?php 
echo "<br>";
echo "OUPUT : ";
echo "<br>";
echo $currPassword; 
echo "<br>";
echo $newPassword; 
echo "<br>";
echo $retypeNewPassword;

 ?>
</body>
</html>

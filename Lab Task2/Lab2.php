<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php

$nameErr = $dobErr = $genderErr = $emailErr = $degreeErr =$bloodErr =  "";
$name = $email = $dob = $gender = $comment = $degree =$bloodErr= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
  $name = test_input($_POST["name"]);
    if(preg_match("/^[A-Z][a-zA-Z -]+$/", $_POST["name"]) === 0){
    $nameErr = "Name must be from letters, dashes, spaces and must not start with dash";

}
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["dob"])) {
    $dobErr = "Date Of Birth is required";
  } else {
    $dob = test_input($_POST["dob"]);
  }

 

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);

  }
  if (empty($_POST["blood"])) {
      $bloodErr = "Must be selected";
    } else {
      $blood = test_input($_POST["blood"]);
    }
    if(!empty($_POST["degree"])){
    $countDegree = count($_POST["degree"]);
    if($countDegree<2){
      $degreeErr = "At least two of them must be selected";
    }
  }else{
     $degreeErr = "At least two of them must be selected";
  }
}


  

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 

?>

<h2>PHP Form </h2>
<p><span class="error">* required field</span></p>
<fieldset>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Date Of Birth: <input type="date" name="dob" 
        placeholder="dd-mm-yyyy" value=""
        > 
  <span class="error">*<?php echo $dobErr;?></span>
  <br><br>
 
  Gender:
  <input type="radio" name="gender" value="Female">Female
  <input type="radio" name="gender" value="Male">Male
  <input type="radio" name="gender" value="Other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>



  DEGREE:
<input type="checkbox" name="degree[]" value="SSC" /> SSC
  <input type="checkbox" name="degree[]" value="HSC" /> HSC
  <input type="checkbox" name="degree[]" value="BSc" /> BSc
  <input type="checkbox" name="degree[]" value="MSc" /> MSc
  <span class="error select atlest two of them">* <?php echo $degreeErr;?></span>
  <br><br>

<legend><b> BLOOD GROUP</b> </legend> 
   <select name="blood">
          <option></option>
          <option>A+</option>
        <option>B+</option>
        <option>AB+</option>
        <option>O+</option>
        <option>A-</option>
        <option>B-</option>
        <option>AB-</option>
        <option>O-</option>
        
        </select>
        <span class="error">* <?php echo $bloodErr;?></span>
        <br><br>

    <input type="submit" name="submit" value="Submit">
    </fieldset>
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $dob;
echo "<br>";
echo $gender;
echo "<br>";
if(isset($_POST['submit'])){
      if(!empty($_POST['degree'])){
      foreach($_POST['degree'] as $checked){
        echo $checked."</br>";
      }
    }
  }
echo $blood;
?>

</body>
</html>
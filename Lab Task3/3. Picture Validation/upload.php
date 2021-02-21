<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.avatar {
  vertical-align: middle;
  width: 100px;
  height: 100px;

}

</style>
</head>
<body>
<?php
$target_dir = "pictures/";
$target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);
$upload = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileUpload"]["tmp_name"]);
  if($check !== false) {
    echo  '<b style="color:green">
      Valid Image File </b> ' ;
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $upload = 0;
  }
}

                                 

if ($_FILES["fileUpload"]["size"] > 4194304) {
  echo '<b style="color:red ;">
      Sorry, your file is too large. </b> ';
  $upload = 0;
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
  echo '<b style="color:red;">
      Sorry, only JPG, JPEG, PNG  files are allowed. </b> '; 
  $upload = 0;
}

if ($upload == 0) {
  echo '<b style="color:red;">
       your file was not uploaded. </b> '; 

} else {
  if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileUpload"]["name"])). " has been uploaded.";
  } else {
    echo '<b style="color:red;">
       Sorry, there was an error uploading your file. </b> ';  "";
  }
}
?>
<form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <fieldset>
  <img class="avatar" src="default.jpg"/><br><br>

  <input type="file" name="fileUpload" id="fileUpload"/>
  <hr>
  <input type="submit" value="Submit" name="submit"><br><br>
  </fieldset>
</form>

</body>
</html>
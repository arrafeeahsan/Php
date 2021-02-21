<?php  
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
     if(empty($_POST["fullname"]))  
      {  
           $error = "<label >Enter Your Name</label>";  
      } 
      else if(empty($_POST["email"]))  
      {  
           $error = "<label >Enter E-mail</label>";  
      }   
      else if(empty($_POST["name"]))  
      {  
           $error = "<label >Enter User Name</label>";  
      }  
      else if (empty($_POST["password"]))  {
        $error = "<label >Enter Password</label>";  
      }
      else if (empty($_POST["newPassword"]))  {
        $error = "<label >Enter Confrim Password</label>";  
      }
      else if(empty($_POST["gender"]))  
      {  
           $error = "<label >Enter Gender</label>";  
      }  

      else if(empty($_POST["dob"]))  
      {  
           $error = "<label '>Enter Your Date of birth </label>";  
      }  
      else  
      {  
           if(file_exists('data.json'))  
           {  
                $current_data = file_get_contents('data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                      'fullname' =>     $_POST['fullname'],
                      'email' =>     $_POST['email'],
                      'name'   =>     $_POST['name'],  
                      'password' =>     $_POST['password'],
                      'newPassword' =>     $_POST['newPassword'],
                      'gender'    =>     $_POST["gender"],  
                       'dob'     =>     $_POST["dob"]  
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('data.json', $final_data))  
                {  
                     $message = "<label class='text-success'>File Appended Success fully</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
      }  
 }  
 ?>  
<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Append Data to JSON File using PHP</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div >  
                <h3 >Store Data </h3><br />                 
                <form method="post">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                     <br />  
                     <fieldset>
                     <fieldset>
                     <label>Name</label>  
                     <input type="text" name="fullname"/><br /> 
                     </fieldset>
                     <fieldset> 
                     <label>E-mail</label>  
                     <input type="text" name="email"><br />  
                     </fieldset>
                     <fieldset>
                     <label>User Name</label>  
                     <input type="text" name="name"/><br />  
                     </fieldset>
                     <fieldset>
                     <label>Password </label><br>
                     <input type="password" name="password"/><br>
                     </fieldset>
                     <fieldset>
                     <label> Confrim  Passwprd</label><br>
                     <input type="password" name="newPassword"/>
                     </fieldset>
                     <fieldset>
               <legend><b> Gender </b> </legend>
               <input type="radio" name="gender" value="Female">Female
               <input type="radio" name="gender" value="Male">Male
               <input type="radio" name="gender" value="Other">Other
               
            </fieldset>

            <hr>
    <fieldset>
        <legend> <b> Date Of Birth </b> </legend> <input type="date" name="dob" 
        placeholder="dd-mm-yyyy" value=""
        min="1970-01-01" max="2030-12-12"> 
      
        </fieldset>
    <br>
                     <input type="submit" name="submit" value="Append" class="btn btn-info" /><br />    
    
  </fieldset>                   
                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  
                  
                </form>  
           </div>  
           <br />  
      </body>  
 </html>  
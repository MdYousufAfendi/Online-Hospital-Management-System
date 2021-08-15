<?php  

session_start();
require_once 'model/model.php';

 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["name"]))  
      {  
           $error = "<label class='text-danger'>Enter Hospital Name</label>";  
      } 

      else if(empty($_POST["email"]))  
      {  
           $error = "<label class='text-danger'>Enter Email</label>";  
      } 
      else if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
           $error = "<label class='text-danger'>Enter valid email </label>"; 
      }


      else if(empty($_POST["uname"]))  
      {  
           $error = "<label class='text-danger'>Enter User name</label>";  
      } 
      else if (!preg_match("/^[a-zA-Z0-9-._]*$/",$_POST["uname"])) {
           $error = "<label class='text-danger'>For user name only letters, numbers,  period and dash  allowed</label>";  
      }
      else if (strlen($_POST["uname"]) < 2){
        $error = "<label class='text-danger'>For user name at least 2 characters needed</label>";  
      }


      else if(empty($_POST["password"]))  
      {  
           $error = "<label class='text-danger'>Enter Password</label>";  
      }
      else if (strlen($_POST["password"]) < 8 ){
           $error = "<label class='text-danger'>Password must not be less than eight (8) characters</label>";           
      }
      else if (!preg_match('#[@$%]{1}#', $_POST["password"])) {
           $error = "<label class='text-danger'>For password use one of the special characters (@, $, %)</label>"; 
      }


      
      else  
      {  
            if (isset($_POST["submit"])) {
            $data['name'] = $_POST['name'];
            $data['email'] = $_POST['email'];
            $data['uname'] = $_POST['uname'];
            $data['password'] = $_POST['password'];           

            if (insertData($data)) {
              echo 'Successfully added!!';
              $_SESSION['uname'] = $_POST['uname'];
              //header("location:LOGGED IN index.html");
            }
            } else {
              echo 'You are not allowed to access this page.';
            }
           
      }  
 }  

 ?>  

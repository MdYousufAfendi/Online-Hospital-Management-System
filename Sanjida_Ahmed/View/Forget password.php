<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

 
  </head>
  <body>

<?php
$email=$emailErr= "";
$msg=$msg1=$msg2="";

 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["email"])) {
      $emailErr = "Email is required";

    }

     else {
      $email = test_input($_POST["email"]);
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email ";

      }
    }


  }


       

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>

<?php
      $data= file_get_contents("a2.json");
       $data= json_decode($data, true);

     if(isset($_POST['submit']))
    {
      foreach ($data as $row) {
        if($row["email"]==$_POST['email'] )
        {
          
          $_SESSION['password'] = $row["password"];
          $_SESSION['email'] = $row["email"];
          

          
           $msg1= $row["password"];
           $msg2= "Your password is $msg1";

          

        }
        else{
          $msg="No such email is available";
          

        }
      }
    }
         
    ?>

  

    <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

  Enter your E-mail: <input type="text" name="email" value="<?php echo $email;?>">

   <span class="error">* <?php echo $emailErr;?></span>

  <br><br>



  <table align="center">

        <?php if(isset($msg1)){?>
          <?php  echo $msg2;?>

         <?php } ?>

         </table>

         

   <br><br>
   <input type="submit" name="submit" value="Submit" class="btn btn-info" />
   <meta ><a href =" ">Login Page </a></meta>
 </form>


  </body>
</html>
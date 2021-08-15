<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="js/regValidate.js"></script>
</head>
<body>

<?php 
require_once ("Controller/editprofile.php");
require_once 'Model/model.php';
include 'header.php';


if (isset($_SESSION['uname'])) {
          echo '<div class="" >';
          echo '<form method= "post"';
           echo '<b>EDIT PROFILE </b><br><br>';

             echo '<label class = "formLabel" >Name : </label>'; 
       echo ' <input type="text" id = "name" name="name" onkeyup = "checkHname()" onblur="checkHname()" value= "';
       echo getHname($_SESSION['uname']);         
       echo  '">';
       if (isset($nameErr)) {
               echo '<span>'. $nameErr . '</span>';
       }

       echo '<span id="nameErr"></span><br><br>';

       
       echo '<label class = "formLabel">Email : </label> '; 
       echo ' <input type="text" id = "email" name="email" onkeyup = "checkEmail()" onblur="checkEmail()" value= "';
       echo getHemail($_SESSION['uname']);        
       echo  '">';
       if (isset($emailErr)) {
               echo $emailErr;
       }
       echo '<span id="emailErr"></span><br><br>';

     

             
             echo '<span class = formSubmit> <input type="submit" name="submit" value="Submit"></span>';
             echo '</form>';
            if (isset($msg)) {
               echo $msg;
            }
       
          echo '</div>';
         

}
else{
                $msg="error";
                header("location:login.php");
                // echo "<script>location.href='login.php'</script>";
        }

 ?>
</span>
<?php include 'footer.php';?>

</body>
</html>

<?php 
session_start();
//include 'header.php';

if (isset($_SESSION['Name'])) {
       include 'Dr.php';  
}
else{
    $msg="error";
   // header("location:login.php");
  }

?>

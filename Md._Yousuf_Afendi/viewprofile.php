<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php 
session_start();

include 'header.php';?>

<?php 
require_once 'Model/model.php';

if (isset($_SESSION['uname'])) {
  
    echo '<div class="" >';
     echo '<b>PROFILE</b><br><br>';
     echo "<span class = 'viewProfile'>";
     if (isset($_SESSION['uname'])){
        
  
       echo " Name  :".getHname($_SESSION['uname'])."<br><br>";
       echo " Email  :".getHemail($_SESSION['uname'])."<br><br>";
      
       echo '<a href="http://localhost/WT%20Project/Last/editprofile.php">Edit Profile</a>';
    echo '</div>';
  

}
else{
    $msg="error";
    header("location:login.php");
    // echo "<script>location.href='login.php'</script>";
  }
}
 ?>
</span>
<?php include 'footer.php';?>


<tr> <td colspan="2" align="right" valign="top"><?php echo "<br><a href='http://localhost/WT%20Project/Last/changepw.php'>Change Password</a>";?> </td></tr><br>
<tr> <td colspan="2" align="right" valign="top"><?php echo "<br><a href='http://localhost/WT%20Project/Last/dashboard.php'>Dashboard</a>";?> </td></tr>
</body>
</html>
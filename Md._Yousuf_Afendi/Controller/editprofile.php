<?php 
session_start();
require_once 'Model/model.php';
$nameErr  = $emailErr = '';
$msg = '';
$success = 1;
if(isset($_POST["submit"]))  
{  
  if(empty($_POST["name"]))  
      {  
           $hnameErr = "<span class='text-danger'>Hospital Name can not be empty</span>";  
           $success = 0;
      }
  

  if(empty($_POST["email"])) {  
           $emailErr = "<span class='text-danger'>Email can not be empty</span>";
           $success = 0;  
      } else {
        if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
           $emailErr = "<span class='text-danger'>Enter valid email </span>"; 
           $success = 0 ;
        }
      }

  
  

      if ($success == 1) {
            $data['hname'] = $_POST['name'];
            $data['email'] = $_POST['email'];
                

            if (updateHinfo($_SESSION['uname'], $data)) {
              $msg = 'Successfully updated!!';
            }
      } 
}
?>

<tr> <td colspan="2" align="right" valign="top"><?php echo "<br><a href='http://localhost/WT%20Project/Last/viewprofile.php'>View Profile</a>";?> </td></tr><br>
<tr> <td colspan="2" align="right" valign="top"><?php echo "<br><a href='http://localhost/WT%20Project/Last/dashboard.php'>Dashboard</a>";?> </td></tr>

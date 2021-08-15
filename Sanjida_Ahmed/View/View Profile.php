<?php

session_start();

        ?>

          <tr> <td> </td><p><h2>View Profile</h2></p></tr>
          
          <tr> <td><?php echo "<br><a href='edit_profile.php'>Edit profile</a>";?> </td></tr>
           
          <tr> <td><?php echo "<br><a href='dashboard.php'>Dashboard</a>";?> </td></tr>


         <?php



if(isset($_SESSION['name']))
{

  
  echo "<br />";
  echo "<br />Name: ".$_SESSION['name'];
  echo "<br />Username: ".$_SESSION['username'];
  echo "<br />Email: ".$_SESSION['email'];
  echo "<br />Gender: ".$_SESSION['gender'];
  echo "<br />Date of Birth: ".$_SESSION['birthday'];
    

}


else {
  
}

 ?>
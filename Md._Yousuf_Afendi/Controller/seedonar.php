<?php
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "wtfinal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Donar";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo '<body style="background-image:linear-gradient(darkblue, skyblue);color:white; text-align: center;">';
  //echo "<table border=1><tr><th>ID</th><th>FullName</th><th>Username</th><th>Password</th></tr>";
  // output data of each row
  echo '<h1 style="border-bottom: 3px skyblue solid; display: block; margin: 0 auto; width: 270px;">Donar Database</h1>';
  echo '<table style="border: 4px skyblue solid; padding: 10px; font-size:23px; margin: 0 auto;">';
  echo '<tr> <th>Name</th> <th>Email</th> <th>Blood_Group</th>  <th>Gender</th> <th>Donate_Organ</th> </tr>';
  while($row = $result->fetch_assoc()) {
    echo '<td style="border: 1px skyblue solid">'. $row["Name"]. "</td>".
         '<td style="border: 1px skyblue solid">'. $row["Email"]. "</td>".
          '<td style="border: 1px skyblue solid">'. $row["Blood_Group"]. "</td>".
     '<td style="border: 1px skyblue solid">' . $row["Gender"]. "
    </td>". '<td style="border: 1px skyblue solid">' . $row["Donate_Organ"]. "</td>" . '</tr>'. "<br>";
    
  }
  //echo "</table>";
  echo "</table>";
  echo '</body>';
} else {
  echo "0 results";
}
$conn->close();
?>
                          <tr> <td colspan="2" align="right" valign="top"><?php echo "<br><a href='http://localhost/WT%20Project/Last/dashboard.php'>Dashboard</a>";?> </td></tr>
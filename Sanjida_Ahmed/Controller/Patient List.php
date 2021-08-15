<?php
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "Online Hospital Management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM patient_list";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
echo '<body style="background-image:linear-gradient(Purple, skyblue);color:white; text-align: center;">';


echo '<h1 style="border-bottom: 3px darkblue solid; display: block; margin: 0 auto; width: 270px;">Patient Database</h1>';

echo '<table style="border: 4px darkblue solid; padding: 10px; font-size:23px; margin: 0 auto;">';

echo '<tr> <th>Name</th> <th>Email</th> <th>Blood_Group</th> <th>Gender</th> <th>Department</th> </tr>';

while($row = $result->fetch_assoc()) {
echo '<td style="border: 1px darkblue solid">'. $row["Name"]. "</td>".
'<td style="border: 1px darkblue solid">'. $row["Email"]. "</td>".
'<td style="border: 1px darkblue solid">'. $row["Blood_Group"]. "</td>".
'<td style="border: 1px darkblue solid">' . $row["Gender"]. "
</td>". '<td style="border: 1px darkblue solid">' . $row["Department"]. "</td>" . '</tr>'. "<br>";
}
//echo "</table>";
echo "</table>";
echo '</body>';
} else {
echo "0 results";
}
$conn->close();
?>

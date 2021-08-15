<!DOCTYPE html>
<html lang="eng">
<head>
  <link rel="stylesheet" herf="style.css">
  <title>Document</title>

</head>
<body>
<form action="http://localhost/WT%20Project/Last/Controller/Patient.php" method="POST" style="border:3px; border-style:solid; border-color:gray; padding: 1em;">
  <h1>Registration</h1>

  <label for="name">Name:</label>
  <input type="text" name="name" id="name">
  <br><br>
  <label for="email">Email:</label>
  <input type="text" name="email" id="email">
  <br><br>
  <label for="bg">Blood Group:</label>
  <input type="text" name="bg" id="bg">
  <br><br>
  <label for="gender">Gender:</label>
  <input type="radio" name="gender" id="gender" value="Male">Male
  <input type="radio" name="gender" id="gender" value="Female">Female
  <input type="radio" name="gender" id="gender" value="Other">Other
  <br><br>
  <label for="dept">Depertment:</label>
  <input type="text" name="dept" id="dept">
  <br><br>
  
  <input type="submit" name="submit" value="Submit">
  <br>
</form>
          <tr> <td colspan="2" align="right" valign="top"><?php echo "<br><a href='dashboard.php'>Dashboard</a>";?> </td></tr>

 <br>
</body>
</html>
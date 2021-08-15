<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wtfinal";

$name=$_POST["name"];
$email=$_POST["email"];
$user=$_POST["bg"];
$pass=$_POST["gender"];
$gen=$_POST["dept"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if(!empty($user)&&!empty($pass)){
$sql = "INSERT INTO Pa (Name,Email,Blood_Group,Gender,Depertment)
VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["bg"]."','".$_POST["gender"]."','".$_POST["dept"]."')";
}
else
{
    echo "Registration failed!!!All fields are required";
    die();
}



if ($conn->query($sql) == TRUE) {
    echo "Registration successful";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
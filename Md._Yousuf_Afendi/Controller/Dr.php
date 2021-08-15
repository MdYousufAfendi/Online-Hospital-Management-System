<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wtp";

$name=$_POST["name"];
$email=$_POST["email"];
$user=$_POST["jod"];
$pass=$_POST["gender"];
$gen=$_POST["dept"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if(!empty($user)&&!empty($pass)){
$sql = "INSERT INTO dr (Name,Email,Join_Date,Gender,Depertment)
VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["jod"]."','".$_POST["gender"]."','".$_POST["dept"]."')";
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
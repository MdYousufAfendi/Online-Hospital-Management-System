<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Online hospital Management";

$name=$_POST["name"];
$email=$_POST["email"];
$user=$_POST["user"];
$pass=$_POST["password"];
$gen=$_POST["gender"];
$birthday=$_POST["birthday"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if(!empty($user)&&!empty($pass)){
$sql = "INSERT INTO patient_info (Name,Email,User_Name,User_Password,Gender,Date_Of_Birth)
VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["user"]."','".$_POST["password"]."','".$_POST["gender"]."','".$_POST["birthday"]."')";
}
else
{
    echo "Registration has failed!!!Please fill all the required fields";
    die();
}



if ($conn->query($sql) == TRUE) {
    echo "Registration is successful";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
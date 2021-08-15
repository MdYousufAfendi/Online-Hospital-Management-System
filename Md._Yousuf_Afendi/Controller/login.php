<?php
session_start();
require_once 'Model/model.php';

$uname="";
$password="";
$msg = '';
if (isset($_POST['login'])){
	$uname = $_POST['uname'];
	$password = $_POST['password'];
	$rowCount = userLogin($uname, $password);
	if ($rowCount == 1) {
		            
            echo '<script>

                    location.href="http://localhost/WT%20Project/Last/dashboard.php"
                 </script>';	}
	else{
		$msg="username or password invalid";
	}

}
?>
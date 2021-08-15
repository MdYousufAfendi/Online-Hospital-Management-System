<!DOCTYPE html>    
<html>    
<head>   
    <link rel="stylesheet" type="text/css" href="style.css"> 
    <script type="text/javascript" src="js/loginValidate.js"></script>   
</head>    
<body>  
<?php 
require_once ("controller/login.php");
include 'header.php';
?>
<form action="http://localhost/WT%20Project/Last/dashboard.php" method="POST" style="border:3px; border-style:solid; border-color:gray; padding: 1em;">
    <h2 class="h2">Login Page</h2>   
    <div class="login1">    
    <form name="loginForm" method="post" onsubmit="validateform()" action="">   
    <span><?php if(isset($msg))
    {
        echo $msg;
    }
    ?>   
    </span>
        <label><b>User Name     
        </b> <br>   
        </label>    
        <input class="textBox" type="text" name="uname" id="uname" onkeyup="checkUname()" onkeydown="checkUname()" onblur="checkUname()" placeholder="Username"> 
        <br>
        <span id="unameErr"></span>   
        <br>    
        <label><b>Password     
        </b>  <br>  
        </label>    
        <input class="textBox" type="password" name="password" id="password" onkeyup="checkPass()" onblur="checkPass()" placeholder="Password"> 
        <br>
        <span id="passErr"></span>   
        <br>
        <input type="submit" name="submit" value="login">     
    
        
    </form>     
</div> 
<?php include 'footer.php';?>
 <a href='http://localhost/WT%20Project/Last/index.html'>Go to Home Page</a>

</body>    
</html> 
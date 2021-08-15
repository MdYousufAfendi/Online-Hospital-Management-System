
<!DOCTYPE html>    
<html>    
<head>   
    <link rel="stylesheet" type="text/css" href="style.css"> 
    <script type="text/javascript" src="js/regValidate.js"></script>   
</head>    
<body>  
<?php 
require_once ("controller/registration.php");
// $data = getAllUname();
include 'header.php';
?>
<form action="" method="POST" style="border:3px; border-style:solid; border-color:gray; padding: 1em;">
    <h2 class="h2">Registration</h2> 
    <div class="login1">    
    <form name="regForm" method="post" onsubmit="validateform()" action="">   
            <label><b>Name</b></label><br>    
        <input class="textBox" type="text" name="name" id="name" onkeyup="checkHname()" onblur="checkHname()" placeholder="Name"> 
        <br>
        <span id="nameErr"></span>   
        <br>   
<?php 
    if(isset($error))
    {
        echo $error;
    }
    ?>   

        <label><b>Email </b></label><br>     
        <input class="textBox" type="text" name="email" id="email" onkeyup="checkEmail()" onblur="checkEmail()" placeholder="Email"> 
        <br>
        <span id="emailErr"></span>   
        <br>  

        <label><b>Username </b></label><br>     
        <input class="textBox" type="text" name="uname" id="uname" onkeyup="showHint(this.value)" onblur="checkUname()" placeholder="Username"> 
        <br>
        <span id="unameErr"></span> 
        <br>    

        <label><b>Password </b></label><br>     
        <input class="textBox" type="Password" name="password" id="password" onkeyup="checkPassword()" onblur="checkPassword()" placeholder="Password"> 
        <br>
        <span id="passErr"></span>   
        <br>     

        <input type="submit" name="submit" value="Submit">       
        <br><br>    
        
        <br><br>    
    </form>     
</div> 
<?php include 'footer.php';?>
<a href='http://localhost/WT%20Project/Last/index.html'>Go to Home Page</a>

</body>    
</html>     

<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "Online Hospital Management";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  

    if(mysqli_connect_errno()) {  
        die("Connection Failed With MySQL: ". mysqli_connect_error());  
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST"){       
    $username = $_POST['enterusername'];  
    $password = $_POST['enterpassword'];  
      
       
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from patient_info where User_Name = '$username' and User_Password = '$password'";  

        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            
            echo '<script>

                    location.href="http://localhost/Project/Dashboard.php"

                 </script>';
                 
        } 
        else{
            
            if(empty($username)){
                echo "<h1>Please Enter Your Username</h1>";
            }

            else if(empty($password)){
                echo "<h1>Please Enter Your Password</h1>";
            }

            else{
                echo "<h1>  Invalid username or password!!!.</h1>";
            }  
        } }      
?>
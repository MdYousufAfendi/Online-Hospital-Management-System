<?php

 

session_start();

 

if (isset($_SESSION['username'])) {
    session_destroy();
  include("../Login.php");
 

}

 

else{
    include("../Login.php");
}

 

 ?>
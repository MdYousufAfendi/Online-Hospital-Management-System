<?php 

require_once 'db_connect.php';

function userLogin($uname, $password){
    $conn = db_conn();
    $selectQuery = "SELECT COUNT(*) FROM `user` where uname = '$uname' and password = '$password'";
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetchColumn();

    return $row;
}

function getAllUname(){
    $conn = db_conn();
    $selectQuery = "SELECT Uname FROM `user` ";
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
function getOldPass($uname){
    $conn = db_conn();
    $selectQuery = "SELECT Password FROM user where uname = '$uname' ";
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $oldPass = $stmt->fetchColumn();

    return $oldPass;
}
function getHname($uname){
    $conn = db_conn();
    $selectQuery = "SELECT name FROM `user` where uname = '$uname' ";
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetchColumn();

    return $row;
}
function getHemail($uname){
    $conn = db_conn();
    $selectQuery = "SELECT Email FROM `user` where uname = '$uname' ";
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetchColumn();

    return $row;
}

function insertData($data){
    $conn = db_conn();
    $selectQuery = "INSERT into user (Name, Email, Uname, Password)
VALUES (:name,:email,  :uname, :password)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':name' => $data['name'],
            ':email' => $data['email'],
            ':uname' => $data['uname'],
            ':password' => $data['password'],
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}




function updatePass($uname, $password){
    $conn = db_conn();
    $selectQuery = "UPDATE user set Password = '$password' where Uname = '$uname' ";
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function updateHinfo($uname, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE user set Name = ?, Email = ? where Uname = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['hname'], $data['email'], $uname
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

?>
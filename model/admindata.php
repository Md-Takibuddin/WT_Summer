<?php

class database{

    function openCon(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bankDataBase";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }

    function addAdmin($adminFName,$adminLName,$adminDOB,$adminAddress,$adminMobileNo,$adminEmail,$adminPassword,$adminKey,$adminCv,$adminPhoto,$conn){
        $sql = "INSERT INTO admindata (adminfname, adminlname,admindob,adminaddress,adminmobileno,adminemail ,adminpassword, adminkey,admincv,adminphoto) 
                 VALUES ('$adminFName','$adminLName','$adminDOB','$adminAddress','$adminMobileNo','$adminEmail','$adminPassword','$adminKey','$adminCv','$adminPhoto')";
        if($conn->query($sql)){
            return true;
        }
        else {
            return false;
        }

    }
    
    function checkMail($adminEmail,$conn){

    $sql="SELECT adminemail FROM `admindata` where adminemail = '$adminEmail'";
    return $conn->query($sql);

    }

    function checkMobileNo($adminMobileNo,$conn){

        $sql="SELECT adminmobileno FROM `admindata` where adminmobileno = '$adminMobileNo'";
        return $conn->query($sql);
    
    }


    function checkAdminKey($adminKey,$conn){

        $sql="SELECT `key` FROM `adminkey` WHERE `key` LIKE BINARY '$adminKey'";
        return $conn->query($sql);
    
    }
    function deleteKey($adminKey,$conn){
        $sql="DELETE FROM `adminkey` WHERE `adminkey`.`key` = '$adminKey'";
        return $conn->query($sql);

    }
    

    function checkLogin($adminGivenEmail,$adminGivenPassword,$conn){

        $sql ="SELECT adminemail,adminpassword FROM `admindata` WHERE adminemail='$adminGivenEmail' AND adminpassword='$adminGivenPassword'";
        return $conn->query($sql);
    }

    function viewProfile($adminEmail,$conn){
        
        $sql="SELECT * FROM `admindata` WHERE adminemail = '$adminEmail'";
        return $conn->query($sql);
    }

    function updateAdmin($adminFName,$adminLName,$adminDOB,$adminAddress,$adminMobileNo,$adminEmail,$adminCv,$adminPhoto,$conn){
        $uSql = "
        UPDATE
              `admindata`
         SET
            `adminfname` = '$adminFName',
            `adminlname` = '$adminLName',
            `admindob` = '$adminDOB',
            `adminaddress` = '$adminAddress',
            `adminmobileno` = '$adminMobileNo',
            `admincv` = '$adminCv',
            `adminphoto` = '$adminPhoto'
         WHERE
            `adminemail` = '$adminEmail'";
           $result= mysqli_query($conn,$uSql);

        if($result==1){ 
            return true;
        }
        else {
            return false;
        }

    }

    function checkOldPassword($adminEmail,$adminPassword,$conn){

        $sql ="SELECT adminemail,adminpassword FROM `admindata` WHERE adminemail='$adminEmail' AND adminpassword='$adminPassword'";
        return $conn->query($sql);
    }

    function changePassword($adminEmail,$password,$conn){
        $uSql = "
        UPDATE
              `admindata`
         SET
            `adminpassword` = '$password'
         WHERE
            `adminemail` = '$adminEmail'";
           $result= mysqli_query($conn,$uSql);

        if($result==1){ 
            return true;
        }
        else {
            return false;
        }

    }

    function deleteAccount($mail,$pass,$conn){

        $sql= "DELETE FROM `admindata` WHERE `admindata`.`adminemail` = '$mail'
         and `admindata`.`adminpassword` = '$pass'";

         $result= mysqli_query($conn,$sql);
         if($result==1){ 
            return true;
        }
        else {
            return false;
        }

    }

    


    function viewAllAdmin($conn){

            $sql="SELECT * FROM `admindata`";
            return $conn->query($sql);
        
    }


    // function conClose(){
    //   this->$conn ->close();
    // }


}

?>
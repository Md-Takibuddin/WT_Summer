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

    function checkLogin($adminGivenEmail,$adminGivenPassword,$conn){

        $sql ="SELECT adminemail,adminpassword FROM `admindata` WHERE adminemail='$adminGivenEmail' AND adminpassword='$adminGivenPassword'";
        return $conn->query($sql);
    }

    function viewProfile($adminEmail,$conn){
        
        $sql="SELECT * FROM `admindata` WHERE adminemail = '$adminEmail'";
        return $conn->query($sql);


    }


    // function conClose(){
    //     $conn ->close();
    // }


}

?>
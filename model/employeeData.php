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


    function checkMail($eMail,$conn){

        $sql="SELECT eMail FROM `employeedata` where eMail = '$eMail'";
        return $conn->query($sql);
    
        }
    
    function checkMobileNo($eMobile,$conn){
    
            $sql="SELECT ePhone FROM `employeedata` where ePhone = '$eMobile'";
            return $conn->query($sql);
        
        }

        
    function addEmployee($eName,$ePhone,$eAddress,$eMail,$eJobTitle,$ePhoto,$eSalary,$eDob,$eLname,$eCv,$conn){
        $sql = " INSERT INTO `employeedata`(`eName`, `ePhone`, `eAddress`, `eMail`, `eJobTitle`, `ePhoto`, `eSalary`, `eDob`, `eLname`, `eCv`) 
                                   VALUES ('$eName','$ePhone','$eAddress','$eMail','$eJobTitle','$ePhoto','$eSalary','$eDob','$eLname','$eCv')";
        
        
        if($conn->query($sql)){
            return true;
        }
        else {
            return false;
        }

    }

        

}


?>
<?php

class eDatabase{



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

        
    function addEmployee($eName,$eLname,$ePhone,$eAddress,$eMail,$eJobTitle,$ePhoto,$eSalary,$eDob,$eCv,$conn){
        $sql = " INSERT INTO `employeedata`(`eFName`,`eLName`, `ePhone`, `eAddress`, `eMail`, `eJobTitle`, `ePhoto`, `eSalary`, `eDob`, `eCv`) 
                                   VALUES ('$eName','$eLname','$ePhone','$eAddress','$eMail','$eJobTitle','$ePhoto','$eSalary','$eDob','$eCv')";
        
        
        if($conn->query($sql)){
            return true;
        }
        else {
            return false;
        }

    }
    function viewAllEmployee($conn){

        $sql="SELECT * FROM `employeedata`";
        return $conn->query($sql);
    
}

        

}


?>
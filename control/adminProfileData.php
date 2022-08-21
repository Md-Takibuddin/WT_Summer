<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
require_once("../model/admindata.php");


$admindb = new database();
$conObj=$admindb->openCon();
$result = $admindb->viewProfile( $_SESSION['email'],$conObj);

if ($result ->num_rows >0){

    while ($myrow = $result ->fetch_assoc()){
    
        $_SESSION['adminFName'] = $myrow["adminfname"];
        $_SESSION['adminLName'] = $myrow["adminlname"];
        $_SESSION['adminDOB'] = $myrow["admindob"];
        $_SESSION['adminAddress'] = $myrow["adminaddress"];
        $_SESSION['adminMobileNo'] = $myrow["adminmobileno"];
        $_SESSION['adminEmail'] = $myrow["adminemail"];
        $_SESSION['adminPassword'] = $myrow["adminpassword"];
        $_SESSION['adminPhoto'] = $myrow["adminphoto"];
        $_SESSION['adminCv'] = $myrow["admincv"];
        $_SESSION['adminKey'] = $myrow["adminkey"];

    }
}

mysqli_close($conObj);


?>
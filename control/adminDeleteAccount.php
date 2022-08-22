<?php
session_start();

include("../model/admindata.php");

$deleteAccountError= "";
$confirmPassword="";

if(isset($_POST["deleteAccount"])){

    $confirmPassword=$_POST["confirmPassword"];

    $admindb = new database();
    $conObj=$admindb->openCon();
    $result =$admindb->deleteAccount($_SESSION['email'],$confirmPassword,$conObj);

    if($result == true){

    session_destroy();
    header("location: ../view/adminlogin.php");
    }
}

if(isset($_POST["deleteAccountCancel"])){

    header("Location:../view/Profile.php");

}




?>
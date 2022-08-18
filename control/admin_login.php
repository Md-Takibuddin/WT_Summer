<?php
session_start();
include("../model/admindata.php");

if (empty($_SESSION['email'])) {

    $adminGivenEmail = "";
    $adminGivenPassword = "";
    $loginError = "";

    if (isset($_POST["Admin_login_submit"])) {

        $adminGivenEmail = $_POST["LoginEmail"];
        $adminGivenPassword = $_POST["LoginPassword"];


        if (!empty($adminGivenEmail) && !empty($adminGivenPassword)) {


            $admindb = new database();
            $conObj=$admindb->openCon();
            $result =$admindb->checkLogin($adminGivenEmail,$adminGivenPassword,$conObj);
            if ($result ->num_rows ==1){

                    $_SESSION['email'] = $adminGivenEmail;
                    $_SESSION['password'] = $adminGivenPassword;
                    header("location: ../view/adminDashboard.php");

            }else{
                $loginError = "Email Or Password is incorrect";
            }

        }
        else {
            $loginError = "Email Or Password is empty.";
        }

    }
}
else {
    header("location: ../view/adminDashboard.php");
}
?>
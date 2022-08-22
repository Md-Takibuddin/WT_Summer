<?php
session_start();

include("../model/admindata.php");

$passwordError= "";
$confirmPassword="";
$newPassword="";
$oldPassword="";

if(isset($_POST["saveNewPass"])){

    $confirmPassword=$_POST["confirmPassword"];
    $newPassword=$_POST["newPassword"];
    $oldPassword=$_POST["oldPassword"];

     // Validate password strength
     $uppercase = preg_match('@[A-Z]@', $newPassword);
     $lowercase = preg_match('@[a-z]@', $newPassword);
     $number = preg_match('@[0-9]@', $newPassword);
     $specialChars = preg_match('@[^\w]@', $newPassword);

    if(empty($confirmPassword) || empty($newPassword)|| empty($oldPassword)){

        $passwordError= "Please input all data";

    }
    else{
        if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($newPassword) < 8) {
            $passwordError = 'Password should be at least 8 characters in length and at least one
             upper case letter, one number, and one special character.';
        }else{
            if($newPassword==$confirmPassword){

                $admindb = new database();
                $conObj=$admindb->openCon();
                $result =$admindb->checkOldPassword($_SESSION['email'],$oldPassword,$conObj);

                if($result ->num_rows ==1){
                    
                    $result =$admindb->changePassword($_SESSION['email'],$newPassword,$conObj);
                    if($result==true){
                        echo "password changed";
                    }else echo "not changed";

                }
                else{
                    $passwordError= "Old Password is Incorrect";
                }
            }
            else {
                $passwordError= "New Password and Confirm password not matched ";

            }
        }
    }

}
if(isset($_POST["changePasswordCancel"])){

    header("Location:../view/Profile.php");

}




?>
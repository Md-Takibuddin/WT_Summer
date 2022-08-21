<?php
include("../model/employeeData.php");
$eName=$ePhone=$eAddress=$eMail=$eJobTitle=$ePhoto=$eSalary=$eDob=$eLname=$eCv=$conObj="";

if(isset($_POST["Admin_signup_submit"])){

    $eName=$_POST["fname"];
    $ePhone=$_POST["phone"];
    $eAddress=$_POST["address"];
    $eMail=$_POST["email"];
    $eJobTitle=$_POST["jobTitle"];
    $eSalary=$_POST["salary"];
    $eDob=$_POST["dob"];
    $eLname=$_POST["lname"];
    $eCv=$_POST[""];
    $ePhoto=$_POST[""];


  

    $admindb = new database();
    $conObj=$admindb->openCon();
    if($admindb->addEmployee($eName,$ePhone,$eAddress,$eMail,$eJobTitle,$ePhoto,$eSalary,$eDob,$eLname,$eCv,$conObj) == true
    &&  $admindb->deleteKey($adminKey,$conObj)== true ){
        $signUpComplete == true;
        // $admindb->conClose();
        move_uploaded_file($_FILES["admin_cvfile"]["tmp_name"], "../files/cv/" . $adminFName . "_" . date("Y-m-d") . ".pdf");
        move_uploaded_file($_FILES["admin_photofile"]["tmp_name"], "../files/photos/" . $adminFName . "_" . date("Y-m-d") . ".jpg");


        session_start();
        $_SESSION['adminFName'] = $adminFName;
        $_SESSION['adminLName'] = $adminLName;
        $_SESSION['adminDOB'] = $adminDOB;
        $_SESSION['adminAddress'] = $adminAddress;
        $_SESSION['adminMobileNo'] = $adminMobileNo;
        $_SESSION['adminEmail'] = $adminEmail;
        $_SESSION['adminPassword'] = $adminPassword;
        $_SESSION['admin_cvfileError'] = $admin_cvfileError;
        $_SESSION['admin_photofileError'] = $admin_photofileError;
        $_SESSION['adminKey'] = $adminKey;
        $_SESSION['adminPhoto'] = $adminPhoto;
        $_SESSION['adminCv'] = $adminCv;

        header("Location:../view/adminSignUpComplete.php");
    }
    else {
        echo "Sign Up Failed";
    }
     

}
?>
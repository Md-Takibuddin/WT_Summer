<?php
require_once("../model/admindata.php");

$adminFName = "";
$adminLName = "";
$adminDOB = "";
$adminAddress = "";
$adminMobileNo = "";
$adminEmail = "";
$adminPassword = "";
$adminKey = "";
$adminCv = "";
$adminPhoto = "";
$photoAllowed = array('png', 'jpg','jpeg');
$CvAllowed = array('pdf');

$conObj="";
$result ="";

$adminFNameError = "";
$adminLNameError = "";
$adminDOBError = "";
$adminAddressError = "";
$adminMobileNoError = "";
$adminEmailError = "";
$adminPasswordError = "";
$adminKeyError = "";
$admin_cvfileError = "";
$admin_photofileError = "";
$dataError = "";
$oldPhoto=$oldCv="";
$signUpComplete = false;


$count = 0;
$countCv=0;
$countPhoto=0;

if (isset($_POST["Admin_update_data"])) {


    $adminFName = $_SESSION['adminFName'];
    $adminLName = $_SESSION['adminLName'];
    $adminDOB = $_POST["admin_dob"];
    $adminAddress = $_POST["admin_address"];
    $adminMobileNo = $_POST["admin_mobileno"];
    $adminEmail = $_POST["admin_email"];
    $adminKey = $_SESSION['adminKey'];
    $adminCv = $_FILES["admin_cvfile"]["name"];
    $adminPhoto = $_FILES["admin_photofile"]["name"];


    if (is_numeric($adminFName) || is_numeric($adminLName)) {
        $count++;
        $adminFNameError = "First name and Last Name should not contain numeric value";
    }

    elseif (empty($adminFName)) {
        $count++;
        $adminFNameError = "First name can't be Empty";
    }

    if (empty($adminDOB)) {
        $count++;
        $adminDOBError = " Date of Birth can't be Empty ";
    }

    if (empty($adminAddress)) {
        $count++;
        $adminAddressError = "Address can't be Empty";
    }


    if (empty($adminMobileNo)) {   
        $count++;
        $adminMobileNoError = "Mobile No can't be Empty ";
    }
    else {
        if (preg_match('/^[0]{1}[1]{1}[0-9]{9}$/', $adminMobileNo)){
        }
        else {
            
            $count++;
            $adminMobileNoError = "Please give a valid phone number. ";
        }
    }


    if (!empty($adminCv)) {
            $cvName =  $_FILES["admin_cvfile"]["name"];
            $extCV = pathinfo($cvName, PATHINFO_EXTENSION);

            if(in_array($extCV, $CvAllowed)) {
                $adminCv = "../files/cv/" .  $adminFName . "_" . date("Y-m-d") . ".pdf";
                $countCv++;
                $oldCv=$_SESSION['adminCv'];
            }
            else {
                $count++;
                $admin_cvfileError = "Please select a PDF file format.";
            }

    }
    elseif (empty($adminCv)) {
        $adminCv = $_SESSION['adminCv'] ;
    }

    if (!empty($adminPhoto)) {

        $photoName =  $_FILES["admin_photofile"]["name"];
        $extPhoto = pathinfo($photoName, PATHINFO_EXTENSION);

        if (in_array($extPhoto, $photoAllowed)){
            $adminPhoto = "../files/photos/" . $adminFName . "_" . date("Y-m-d") . ".jpg";
            $countPhoto++;
            $oldPhoto=$_SESSION['adminPhoto'];
            
        }
        else {
            $count++;
            $admin_photofileError = "Please choose a JPG or PNG photo.";
        }

    }
    else {
        $adminPhoto=$_SESSION['adminPhoto'];
    }


$admindb = new database();
$conObj=$admindb->openCon();

    if($count == 0){ 
        if($admindb->updateAdmin($adminFName,$adminLName,$adminDOB,$adminAddress,$adminMobileNo,$adminEmail,$adminCv,$adminPhoto,$conObj) == true){
            if ($countCv==1) {
                unlink($oldCv);
             move_uploaded_file($_FILES["admin_cvfile"]["tmp_name"], "../files/cv/" . $adminFName . "_" . date("Y-m-d") . ".pdf");
            }
            if ($countPhoto==1) {
                unlink($oldPhoto);
            move_uploaded_file($_FILES["admin_photofile"]["tmp_name"], "../files/photos/" . $adminFName . "_" . date("Y-m-d") . ".jpg");
            }   

            header("Location:../view/profile.php");
        }
        else $dataError = "Data not Updated";
        header("Location:../view/profile.php");
    }
    else {
       $dataError = "Please try again";
    }

    mysqli_close($conObj);

}

?>
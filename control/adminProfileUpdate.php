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
$signUpComplete = false;


$count = 0;

if (isset($_POST["Admin_update_data"])) {


    $adminFName = $_POST["admin_fname"];
    $adminLName = $_POST["admin_lname"];
    $adminDOB = $_POST["admin_dob"];
    $adminAddress = $_POST["admin_address"];
    $adminMobileNo = $_POST["admin_mobileno"];
    $adminEmail = $_POST["admin_email"];
    $adminKey = $_POST["admin_key"];
    $adminCv = $_FILES["admin_cvfile"]["name"];
    $adminPhoto = $_FILES["admin_photofile"]["name"];



    if (is_numeric($adminFName) || is_numeric($adminLName)) {
        $adminFNameError = "First name and Last Name should not contain numeric value";
    }
    elseif (empty($adminFName)) {
        $adminFNameError = "First name can't be Empty";
    }
    else {
        $count++;
    }

    if (empty($adminDOB)) {
        $adminDOBError = " Date of Birth can't be Empty ";
    }
    else {
        $count++;
    }

    if (empty($adminAddress)) {
        $adminAddressError = "Address can't be Empty";
    }
    else{
        $count++;
    }

    if (empty($adminMobileNo)) {   
        $adminMobileNoError = "Mobile No can't be Empty ";
    }
    else {
        if (preg_match('/^[0]{1}[1]{1}[0-9]{9}$/', $adminMobileNo)){
        $count++;
        }
        else {
            $adminMobileNoError = "Please give a valid phone number. ";
        }
    }

    if (empty($adminEmail)) {
        $adminEmailError = "Email can't be Empty";
    }
    else {
        $count++;
    }


    if (empty($adminKey)) {
        $adminKeyError = "Admin key can't be Empty";
    }
    else {
        if ($adminKey == "XYZ123") {
            $count++;
        }
        else
            $adminKeyError = "Wrong Admin key";
    }


    if (!empty($adminCv)) {
            $cvName =  $_FILES["admin_cvfile"]["name"];
            $extCV = pathinfo($cvName, PATHINFO_EXTENSION);

            if(in_array($extCV, $CvAllowed)) {
            $count++;
            $admin_cvfileError = "You have selected " . $_FILES["admin_cvfile"]["name"];
            $adminCv = "../files/cv/" .  $adminFName . "_" . date("Y-m-d") . ".pdf";
            }
            else {
                $admin_cvfileError = "Please select a PDF file format.";
            }

    }
    else {
        $admin_cvfileError = "Please choose a PDF file.";
    }

    if (!empty($adminPhoto)) {

        $photoName =  $_FILES["admin_photofile"]["name"];
        $extPhoto = pathinfo($photoName, PATHINFO_EXTENSION);

        if (in_array($extPhoto, $photoAllowed)) {
            $count++;
            $admin_photofileError = "You have selected " . $_FILES["admin_photofile"]["name"];
            $adminPhoto = "../files/photos/" . $adminFName . "_" . date("Y-m-d") . ".jpg";
        }
        else {
            $admin_photofileError = "Please choose a JPG/PNG file.";
        }

    }
    else {
        $admin_photofileError = "Please choose a Photo.";
    }

    $admindb = new database();
    $conObj=$admindb->openCon();
    $result =$admindb->checkMail($adminEmail,$conObj);

    if ($count !=10) {
        echo "Please Inter All Data";
    }
    elseif($count == 10 && $result ->num_rows >0){
        echo "mail already exist. ";
    }
    
    elseif($count == 10 && $result ->num_rows ==0) {


        if($admindb->addAdmin($adminFName,$adminLName,$adminDOB,$adminAddress,$adminMobileNo,$adminEmail,$adminPassword,$adminKey,$adminCv,$adminPhoto,$conObj) == true){
            $signUpComplete == true;
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

}
else {
    echo"not set";
}

?>
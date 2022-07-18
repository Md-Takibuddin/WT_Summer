<?php
include("../model/admindata.php");

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

if (isset($_POST["Admin_signup_submit"])) {

    $adminFName = $_POST["admin_fname"];
    $adminLName = $_POST["admin_lname"];
    $adminDOB = $_POST["admin_dob"];
    $adminAddress = $_POST["admin_address"];
    $adminMobileNo = $_POST["admin_mobileno"];
    $adminEmail = $_POST["admin_email"];
    $adminPassword = $_POST["admin_password"];
    $adminKey = $_POST["admin_key"];
    $adminCv = $_FILES["admin_cvfile"]["name"];
    $adminPhoto = $_FILES["admin_photofile"]["name"];


    // Validate password strength
    $uppercase = preg_match('@[A-Z]@', $adminPassword);
    $lowercase = preg_match('@[a-z]@', $adminPassword);
    $number = preg_match('@[0-9]@', $adminPassword);
    $specialChars = preg_match('@[^\w]@', $adminPassword);

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

    if (empty($adminPassword)) {
        $adminPasswordError = "Password can't be Empty <br>";
    }
    else {
        $count++;
    }

    if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($adminPassword) < 8) {
        $adminPasswordError = 'Password should be at least 8 characters in length and at least one upper case letter, one number, and one special character.';
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

            if(in_array($extCV, $CvAllowed) && 
            move_uploaded_file($_FILES["admin_cvfile"]["tmp_name"], "../files/cv/" . $adminFName . "_" . date("Y-m-d") . ".pdf")) {
            $count++;
            $admin_cvfileError = "You have selected " . $_FILES["admin_cvfile"]["name"];
            $adminCv = 'files/cv/' . $_FILES["admin_cvfile"]["name"];
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

        if (in_array($extPhoto, $photoAllowed) &&
            move_uploaded_file($_FILES["admin_photofile"]["tmp_name"], "../files/photos/" . $adminFName . "_" . date("Y-m-d") . ".jpg")) {
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



    if ($count == 10) {
        $formData = array(
            'First Name:' => $adminFName,
            'Last  Name:' => $adminLName,
            'Date of Birth:' => $adminDOB,
            'AdminAddress:' => $adminAddress,
            'Mobile Number:' => $adminMobileNo,
            'Email:' => $adminEmail,
            'Password:' => $adminPassword,
            'Admin Key:' => $adminKey,
            'Uploaded CV:' => $adminCv,
            'Uploaded Photo:' => $adminPhoto


        );
        $existingData = file_get_contents('../data/adminData.json');
        $tempJsonData = json_decode($existingData);
        $tempJsonData[] = $formData;
        $jsonData = json_encode($tempJsonData, JSON_PRETTY_PRINT);

        if (file_put_contents("../data/adminData.json", $jsonData)) {
            $dataError = "Data successfully saved <br>";
            $signUpComplete = true;
        }

        else {
            $dataError = "No data saved";
        }


        // $servername = "localhost";
        // $username = "root";
        // $password = "";
        // $dbname = "bankDataBase";
        // $conn = new mysqli($servername, $username, $password, $dbname);
        // if ($conn->connect_error) {
        // die("Connection failed: " . $conn->connect_error);
        // }
        // $sql = "INSERT INTO adminlogindata (email, password) VALUES ('$adminEmail','$adminPassword')";
        // $res = $conn->query($sql);//execute query

        $admindb = new database();
        $conObj=$admindb->openCon();
        $result =$admindb->addAdmin($adminFName,$adminLName,$adminDOB,$adminAddress,$adminMobileNo,$adminEmail,$adminPassword,$adminKey,$adminCv,$adminPhoto,$conObj);
        //$admindb->conClose();


        if ($signUpComplete == true) {

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

    }

}

?>
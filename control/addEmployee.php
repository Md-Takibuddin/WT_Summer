<?php
require_once("../model/employeeData.php");
$eName=$ePhone=$eAddress=$eMail=$eJobTitle=$ePhoto=$eSalary=$eDob=$eLname=$eCv=$conObj="";

if(isset($_POST["Admin_signup_submit"])){

    $eName=$_POST["fname"];
    $ePhone=$_POST["admin_mobileno"];
    $eAddress=$_POST["address"];
    $eMail=$_POST["admin_email"];
    $eJobTitle=$_POST["jobTitle"];
    $eSalary=$_POST["salary"];
    $eDob=$_POST["dob"];
    $eLname=$_POST["lname"];
    $eCv= $adminCv = "../files/cv/" .  $eName . "_" . date("Y-m-d") . ".pdf";
    $ePhoto="../files/photos/" . $eName . "_" . date("Y-m-d") . ".jpg";


  

    $admindb = new eDatabase();
    $conObj=$admindb->openCon();
    if($admindb->addEmployee($eName,$eLname,$ePhone,$eAddress,$eMail,$eJobTitle,$ePhoto,$eSalary,$eDob,$eCv,$conObj) == true ){
        $signUpComplete == true;
        // $admindb->conClose();
       if ( move_uploaded_file($_FILES["admin_cvfile"]["tmp_name"], "../files/cv/" . $eName . "_" . date("Y-m-d") . ".pdf")==true &&
        move_uploaded_file($_FILES["admin_photofile"]["tmp_name"], "../files/photos/" . $eName . "_" . date("Y-m-d") . ".jpg")==true){
        

        session_start();
        $_SESSION['eFName'] = $eName;
        $_SESSION['eLName'] = $eLname;
        $_SESSION['eDOB'] = $eDob;
        $_SESSION['eAddress'] = $eAddress;
        $_SESSION['eMobileNo'] = $ePhone;
        $_SESSION['eEmail'] = $eMail;
        $_SESSION['eJobTitle'] = $eJobTitle;
        $_SESSION['eSalary'] = $eSalary;
        $_SESSION['ePhoto'] = $ePhoto;
        $_SESSION['eCv'] = $eCv;

        header("Location:../view/employeeSignUpComplete.php");
        }

    }
    else {
        echo "Sign Up Failed";
    }
     

}
?>
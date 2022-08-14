<?php
require_once("../../model/admindata.php");

$adminMobileNo= $_REQUEST['n'];

$admindb = new database();
$conObj=$admindb->openCon();
$result =$admindb->checkMobileNo($adminMobileNo,$conObj);

if($result ->num_rows >0){
    echo "Mobile Number already exist ";
}
else {
  echo "ok";
}


?>
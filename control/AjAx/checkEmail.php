<?php
require_once("../../model/admindata.php");

$mail= $_REQUEST['q'];

$admindb = new database();
$conObj=$admindb->openCon();
$result =$admindb->checkMail($mail,$conObj);

if($result ->num_rows >0){
    echo "Mail already exist ";
}
else {
  echo "ok";
}


?>
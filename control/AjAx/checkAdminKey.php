<?php
require_once("../../model/admindata.php");

$key= $_REQUEST['k'];

$admindb = new database();
$conObj=$admindb->openCon();
$result =$admindb->checkAdminKey($key,$conObj);

if($result ->num_rows >0){
  echo "ok";
}
else {
echo "Invalid";
}

?>
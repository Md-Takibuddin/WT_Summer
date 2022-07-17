<?php
session_start();

if (empty($_SESSION['email'])) {

    header("location: ../view/adminlogin.php");

}
else {

    setcookie("user", "visited", time() + 86400);
    if (isset($_COOKIE["user"])) {
        echo "Hello sir,";

    }
    else {
        echo "Welcome sir,";
    }

}

?>
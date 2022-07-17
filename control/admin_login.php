<?php
session_start();

if (empty($_SESSION['email'])) {

    $adminGivenEmail = "";
    $adminGivenPassword = "";
    $loginError = "";

    if (isset($_POST["Admin_login_submit"])) {

        $adminGivenEmail = $_POST["LoginEmail"];
        $adminGivenPassword = $_POST["LoginPassword"];

        $tmpdata = file_get_contents("../data/adminData.json");
        $adminJsonData = json_decode($tmpdata, true);

        if (!empty($adminGivenEmail) && !empty($adminGivenPassword)) {

            foreach ($adminJsonData as $data) {

                if ($data["Email:"] == $adminGivenEmail && $data["Password:"] == $adminGivenPassword) {

                    $_SESSION['email'] = $data["Email:"];
                    $_SESSION['password'] = $data["Password:"];
                    header("location: ../view/adminDashboard.php");
                }
            }
        }
        else {
            $loginError = "Email Or Password is empty.";
        }

    }
}
else {
    header("location: ../view/adminDashboard.php");
}
?>
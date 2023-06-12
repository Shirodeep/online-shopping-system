<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if ($_POST["submit"]) {
    include_once("./partials/dbconnection.php");
    session_start();
    $uid = $_SESSION["uid"];
    $oldPassword = $_POST["password"];
    $newPassword = $_POST["newpassword"];
    $confirmNewPassword = $_POST["confirmpassword"];
    $qrr = "SELECT * FROM useroauth WHERE userid = $uid;";
    $result = mysqli_query($db, $qrr);
    $row = mysqli_fetch_assoc($result);
    $hashPassword = $row["passwords"];
    if (password_verify($oldPassword, $hashPassword)) {
        if ($newPassword == $confirmNewPassword) {
            $hashedNewPassword = password_hash($newPassword, PASSWORD_DEFAULT);
            $querr = "UPDATE useroauth SET passwords = '$hashedNewPassword' WHERE userid = $uid;";
            $inserted = mysqli_query($db, $querr);
            header("Location: ./passwordreset.php?p=1");
            exit();
        }
        header("Location: ./passwordreset.php?p=0");
        exit();
    } else {
        header("Location: ./passwordreset.php?p=0");
        exit();
    }
} else {
    header("Location: ./passwordreset.php");
    exit();
}

<?php
session_start();
$uid = $_SESSION["uid"];
if ($uid) {
    include_once("./partials/dbconnection.php");
    if (isset($_POST['submit'])) {
        $name = $_POST["fullname"];
        $gender = $_POST["gender"];
echo "$gender";
        $forRecurrentUserDataCheck = "SELECT * FROM useroauth WHERE userid = '$uid';";
        $isRecurrentInDb = mysqli_query($db, $forRecurrentUserDataCheck);

        while ($row = mysqli_fetch_assoc($isRecurrentInDb)) {
            $newName = $row["fullname"];
            $newGender = $row["gender"];
            if ($name  == $newName and  $gender  == $newGender) {
                header("Location: ./editprofile.php?q=0");
                exit();
            }
        }
        $sqlquerry = "UPDATE useroauth SET fullname = '$name', gender = '$gender' WHERE userid = $uid;";
        $insert = mysqli_query($db, $sqlquerry);
        $_SESSION["uname"] = $name;
        header("Location: ./editprofile.php?q=1");
        exit();
    }
} else {
    header("Location: /index.php");
}

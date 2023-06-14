<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

$uid = $_SESSION["uid"];
date_default_timezone_set("Asia/Kathmandu");

if ($uid) {
    include_once("./partials/dbconnection.php");
    $errorUpdatingIntoDatabase = false;
    if (isset($_POST['submit'])) {
        $name = $_POST["name"];
        $price = $_POST["price"];
        $description = $_POST["description"];
        $quantity = $_POST["quantity"];
        $image = $_FILES["image"];

        $imageName = $image["name"];
        $imageFullPath = $image["full_path"];
        $imageType = $image["type"];
        $imageTmpName = $image["tmp_name"];
        $imageError = $image["error"];
        $imageSize = $image["size"];
        $image_path = "../public/images/uploaded/".date("y-m-d h-i-sa") . $imageName;
        echo "<pre>". $image_path;
        echo "  $name,$price,$description,$quantity";
        echo "</pre>";

        if (move_uploaded_file($imageTmpName, $image_path)) {
            $qrr = "INSERT INTO items (iname, iprice, idescription, iimage, iquantity, uuid) VALUES ('$name', $price, '$description', '$image_path', $quantity, $uid);";
            $result = mysqli_query($db, $qrr);
            header("location: ./profile.php?p=1");
        } else {
            header("location: ./additems.php?p=0");
        }
    }
}

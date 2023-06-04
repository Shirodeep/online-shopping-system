
<?php
include_once("./partials/dbconnection.php");
$upload = 2;
$errorUpdatingIntoDatabase = false;
if (isset($_POST['submit'])) {
    $name = $_POST["firstname"] . " " . $_POST["middlename"] . " " . $_POST["lastname"];
    $contact = $_POST["contact"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $passwords = $_POST["password"];
    $forUsernameCheck = "SELECT email, contact FROM useroauth;";
    $isInDb = mysqli_query($db, $forUsernameCheck);
    // to check if user already exists
    while ($checkName = $isInDb->fetch_assoc()) {
        $checkContact = $checkName['contact'];
        $checkEmail = $checkName['email'];
        echo "<p>this is the result $checkContact , $checkEmail</p>";
        
        if ($checkContact == $contact) {
            $upload = 0;
            $errorUpdatingIntoDatabase = 0;
            header("Location: ./register.php?q=$errorUpdatingIntoDatabase");

        }
        if ($checkEmail == $email) {
            $upload = 0;
            $errorUpdatingIntoDatabase = 0;
            header("Location: ./register.php?q=$errorUpdatingIntoDatabase");

        }
    }
    if ($upload != 0) {
        $sqlquerry = "INSERT INTO useroauth (fullname, contact, gender, email, passwords) VALUES ('$name', '$contact', '$gender', '$email', '$passwords');";
        $insert = mysqli_query($db, $sqlquerry);
        header("Location: ./register.php?q=1");
    }
}
// header("Location: ./register.php?q=$errorUpdatingIntoDatabase");
?>
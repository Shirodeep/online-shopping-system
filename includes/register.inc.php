
<?php
if (isset($_POST['submit'])) {
    $name = $_POST["firstname"] . " " . $_POST["middlename"] . " " . $_POST["lastname"];
    $contact = $_POST["contact"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];


    $forUsernameCheck = "SELECT fullname, contact FROM `useroauth`;";
    $isInDb = mysqli_query($db, $forUsernameCheck);
    // to check if user already exists
    while ($checkName = $isInDb->fetch_assoc()) {
        if ($checkName['contact'] == $contact) {
            echo "<script>alert('User already exists')</script>";
            $upload = 0;
            $errorUpdatingIntoDatabase = true;
        }
        if ($checkName['email'] == $email) {
            echo "<script>alert('User already exists')</script>";
            $upload = 0;
            $errorUpdatingIntoDatabase = true;
        }
    }
    if ($upload != 0) {
        $sqlquerry = "INSERT INTO useroauth (fullname, contact, gender) VALUES ('$name', '$contact', '$gender');";
        $insert = mysqli_query($db, $sqlquerry);
        $inserted = true;
    }
}
header("Location: http://127.0.0.1/includes/register.php");
?>
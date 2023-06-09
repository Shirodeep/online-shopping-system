
<?php
session_start();
$uname = $_SESSION["uname"];

if($uname){
    $logined = true;
    include_once("./partials/dbconnection.php");
    include_once("./partials/header.php");
    echo "<h1>Profile Dashboard</h1>";
    echo $uname;
    $querry = "SELECT * FROM useroauth WHERE fullname = '$uname';";
    $result = mysqli_query($db, $querry);
    // while($row = mysqli_fetch_assoc($result)){        $contact = $row["contact"];
    //     $gender = $row["gender"];
    //     $email = $row["email"];
    //     echo "$uname $contact $gender $email";
    // }
    include_once("./partials/footer.php");
}else{
    header("Location: ./login.php");
}
?>
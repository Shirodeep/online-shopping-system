<html>
<?php
session_start();
$title = "Thikxa";
$uname = $_SESSION["uname"];
include_once("./includes/partials/header.php");
include_once("./includes/partials/dbconnection.php");
?>

<body>
    <?php if ($_GET["logout"]) { ?>
        <div class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong>Logged Out!!!</strong>
            </button>
        </div>
    <?php } ?>
    <?php
    $itemsQrr = "SELECT * from items;";
    $items = mysqli_query($db, $itemsQrr);
    while ($row = mysqli_fetch_assoc($items)) {
        $name = $row['itemname'];
        $rating = $row['itemrating'];
        $price = $row['itemprice'];
        echo '
        <h1>Our Collections</h1>
        <div class="container-fluid p-4 d-flex flex-row flex-wrap">
            <a class="items p-1 m-1" href="#" style="color:black; text-decoration: none;border: 1px solid gray; border-radius: 15px;">
            <img src="./public/images/thumb.png" height="150" width="150" alt="image">
            <div class="row">
                <div class="col">' . $name . '</div>
            </div>
            <div class="row">
                <div class="col">' . $rating . '</div>
            </div>
            <div class="row">
                <div class="col">रु ' . $price . '</div>
            </div>
            </a>   
        </div>';
    }
    include("./includes/partials/footer.php"); ?>
</body>
</html>
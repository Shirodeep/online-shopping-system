<html>
<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
session_start();
$title = "Thikxa";
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
    <div class="container-fluid p-3" id="collections">
        <div class="row ">    
            <h1>Our Collections</h1>
            <div class="d-flex flex-row-reverse" style="height: max-content;z-index: 999;">
                <div class=""><a href="./itemdisplay.php"><button class="btn btn-warning">Show more</button></a></div>
            </div>
        </div>
        <div class=" d-flex flex-wrap" style="height: max-content;">
        <?php
                $itemsQrr = "SELECT * from items;";
                $items = mysqli_query($db, $itemsQrr);
                $rowCount = 7;
                while ($row = mysqli_fetch_assoc($items)) {
                    $iname = $row["iname"];
                    $iprice = $row["iprice"];
                    $idescription = $row["idescription"];
                    $iquantity = $row["iquantity"];
                    $iimage = $row["iimage"];
                    $iimage = "/public/images/uploaded/" . $iimage;
                    $iid = $row["iid"];
                    if ($rowCount >= 1) {
                        echo '
                    <a class="items mx-2 my-2 p-2 m-1" href="./includes/itemsdescription.php?id=' . $iid . '" style="color:black; text-decoration: none;border: 1px solid gray; border-radius: 15px;height:max-content;width:30vh">
                    <img src="'.$iimage.'" height="150" width="150">
                    <div class="row p-1">
                    <div class="col"> '. $iname .' </div>
                    </div>
                    <div class="row p-1">
                    <div class="col">रु ' . $iprice . '</div>
                    </div>
                    <div class="row p-1">
                    <div class="col"></div>
                    </div>
                    </a>';
                    }
                    else{
                        break;
                    }
                    $rowCount--;
                } ?>
        </div>
    </div>
    </div>
    <?php include("./includes/partials/footer.php"); ?>
</body>

</html>
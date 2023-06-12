<?php   
$title = "Profile";
session_start();
$uname = $_SESSION["uname"];
$uid = $_SESSION["uid"];
if ($uname) {
    include_once("./partials/dbconnection.php");
    include_once("./partials/header.php");
    $itemsqrr = "SELECT * FROM items WHERE user_id = '$uid'";
    $result = mysqli_query($db, $itemsqrr);
?>
    <h1>Profile Dashboard</h1>
    <div class="container-fluid">
        <div class="row">
            <h5 class="container-sm"><?php echo "I am " . $uname ?></h5>
        </div>
        <div class="row align-items-center p-2">
            <div class="col-8 col-md-10 " style="font-size:30">Your Items</div>
            <div class="col">
                <a href="./editprofile.php" class="btn btn-secondary">Edit profile</a>
            </div>
        </div>
        <div class="container-md">
            <?php
            if (!mysqli_num_rows($result)) {
            ?>
                <div class="row">
                    <div class="h3">No items to show <a href="./additems.php">add items here</a></div>
                </div>
            <?php
            }
                while ($row = mysqli_fetch_assoc($result)) {
                    $name = $row['itemname'];
                    $rating = $row['itemrating'];
                    $price = $row['itemprice'];
            ?>
                    <h1>Our Collections</h1>
                    <div class="container-fluid p-4 d-flex flex-row flex-wrap">
                        <a class="items p-1 m-1" href="#" style="color:black; text-decoration: none;border: 1px solid gray; border-radius: 15px;">
                            <img src="./public/images/thumb.png" height="150" width="150" alt="image">
                            <div class="row">
                                <div class="col"><?php echo $name ?></div>
                            </div>
                            <div class="row">
                                <div class="col"><?php echo $rating ?></div>
                            </div>
                            <div class="row">
                                <div class="col">रु <?php echo $price ?></div>
                            </div>
                        </a>
                    </div>

            <?php
                }
            ?>
        </div>
    </div>
<?php
    include_once("./partials/footer.php");
} else {
    header("Location: ./login.php");
}
?>
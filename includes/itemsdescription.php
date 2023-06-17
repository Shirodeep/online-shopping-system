<?php
session_start();
$uname = $_SESSION["uname"];
include_once("./partials/dbconnection.php");
include_once("./partials/header.php");
$itemid = $_GET["id"];
$qrr = "SELECT * FROM items WHERE iid=$itemid;";
$result = mysqli_query($db, $qrr);
$result = mysqli_fetch_assoc($result);

$iname = $result["iname"];
$iprice = $result["iprice"];
$idescription = $result["idescription"];
$iquantity = $result["iquantity"];
$iimage = $result["iimage"];
$iimage = "/public/images/uploaded/" . $iimage;
$iid = $result["iid"];
?>
<?php
if ($_GET["isOnCart"] == 1 and $_GET["isOnCart"] != "") { ?>
    <div class="row alert alert-warning alert-dismissible fade show" role="alert">
        <strong class="col-11">ITEM ALREADY ON CART</strong>
        <button type="button" class="col btn btn-outline-success" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php
}
if ($_GET["isOnCart"] == 0 and $_GET["isOnCart"] != "") { ?>
    <div class="row alert alert-success alert-dismissible fade show" role="alert">
        <strong class="col-11">ADDED TO CART!!!</strong>
        <button type="button" class="col btn btn-outline-success" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php
}
?>
<div class="container my-5">
    <div class="row">
        <div class="col-lg-6  col-sm-6"><img src="<?php echo $iimage ?>" height="100%" width="100%"></div>
        <div class="col-lg-6  col-sm-6 ">
            <form action="./addtocart.php">
                <input type="text" value="<?php echo $iid ?>" name="itemid" hidden>
                <input type="text" value="<?php echo $iname ?>" name="itemname" hidden>
                <input type="text" value="<?php echo $iprice ?>" name="price" hidden>

                <input type="text" value="<?php
                                            $encryptionKey = "LALA!@#";
                                            $encrypted = openssl_encrypt($iimage, "AES-128-CTR", $encryptionKey);
                                            echo $encrypted;
                                            ?>" name="xxyyzz" hidden>

                <div class="row p-3 ">
                    <div class="col">
                        <h2><?php echo $iname ?></h2>
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col">
                        <h2><?php echo "Rs " . $iprice ?></h2>
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col">
                        <spam class="text-secondary">Quantity: </spam>
                        <button class="btn btn-primary" type="button" onclick="addDelete('-', 'addQuantity');">-</button>
                        <input type="text" id="addQuantity" name="quantity" value="1" readonly style="width: 5vh; text-align: center">
                        <button class="btn btn-primary" type="button" onclick="addDelete('+', 'addQuantity');">+</button>
                    </div>
                </div>
                <div class="row p-2">
                    <h6 class=" col p-2">Available Items : <?php echo $iquantity ?></h6>
                </div>
                <div class="row-sm p-2 d-flex justify-content-between">
                    <div class="col-2"></div>
                    <a class="col-3" href="./buy.php?"><button class=" btn btn-outline-warning" name="buy" type="button" style="width: 100%">Buy Now</button></a>
                    <a class="col-3"><button class=" btn btn-outline-success" type="submit" name="cart" value="c<?php echo mt_rand(323121, 927188) ?>" style="width: 100%">Add to Cart</button></a>
                    <div class="col-2"></div>
                </div>
            </form>
        </div>
    </div>
    <div class="row bg-secondary text-warning text-center " style="height: 50vh;padding-top: 15vh">
        <h1>Rating + FeedBack Available Soon...</h1>
    </div>

</div>
<?php include_once("./partials/footer.php"); ?>

<script src="../js/alljs.js">
</script>
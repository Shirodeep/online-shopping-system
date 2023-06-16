<?php
include_once("./partials/header.php");
include_once("./partials/dbconnection.php");
session_start();
$uname = $_SESSION["uname"];
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
<div class="container my-5">
    <div class="row">
        <div class="col-lg-6  col-sm-6"><img src="<?php echo $iimage ?>" height="100%" width="100%"></div>
        <div class="col-lg-6  col-sm-6 ">
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
                    <button class="btn btn-primary" onclick="addDelete('-');">-</button>
                    <INPUT type="text" id="addQuantity" value="1" readonly style="width: 5vh; text-align: center">
                    <button class="btn btn-primary" onclick="addDelete('+');">+</button>
                </div>
            </div>
            <div class="row p-2">
                <h6 class=" col p-2">Available Items : <?php echo $iquantity ?></h6>
            </div>
            <div class="row p-2 d-flex justify-content-between">
                <button class="col-5 btn btn-outline-warning" onclick="return checkSigned()">Buy Now</button>
                <button class="col-5 btn btn-outline-success" onclick="return checkSigned()">Add to Cart</button>
            </div>
        </div>
    </div>
    <div class="row bg-secondary text-warning text-center " style="height: 50vh;padding-top: 15vh">
        <h1>Rating + FeedBack Available Soon</h1>
    </div>
</div>
<?php include_once("./partials/footer.php"); ?>

<script>
    function addDelete(compare) {
        let max_quantity = Number('<?php echo $iquantity ?>');
        let x = document.getElementById("addQuantity");
        if (compare == '-' && x.value > 1) {
            x.value--;
        }
        if (compare == '+' && x.value < 5) {
            x.value++;
        }
    }

    function checkSigned() {
        let isSessionSet = '<?php echo $uname ?>';
        if(isSessionSet != ""){
            alert("go to shopping");
            return true;
        }
        return false;
    }
</script>
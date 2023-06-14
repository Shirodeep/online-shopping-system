<?php
session_start();
$uname =  $_SESSION["uname"];
if($uname){

    include_once("./partials/header.php");
    include_once("./partials/dbconnection.php");
    ?>
<div class="row p-2 text-center">
    <h1 class="col">Add items</h1>
</div>
<div class="container " style="height: 100%;background-color:whitesmoke;width:60%; border-radius: 5%">
    <form action="./additems.inc.php" method="post" enctype="multipart/form-data">
        <div class="row p-2">
            <div class="col">
                <label for="itemname" class="form-label ">Item name</label>
                <input type="text" id="itemname" name="name" class="form-control" required>
            </div>
        </div>
        <div class="row p-2">
            <div class="col">
                <label for="itemprice" class="form-label ">Item Price</label>
                <input type="text" id="itemprice" name="price" class="form-control" required>
            </div>
        </div>
        <div class="row p-2">
            <div class="col">
                <label for="itemdescription" class="form-label ">Item Description</label>
                <textarea id="itemdescription" name="description" class="form-control"></textarea>
            </div>
        </div>
        <div class="row p-2">
            <div class="col">
                <label for="itemquantity" class="form-label ">Item Quantity</label>
                <input type="number" id="itemquantity" name="quantity" class="form-control" required>
            </div>
        </div>
        <div class="row p-2">
            <div class="col">
                <label for="itemimage" class="form-label ">Item Image</label>
                <input type="file"  id="itemimage" name="image" class="form-control" required>
            </div>
        </div>
        <div class="row p-2">
            <div class="col">

                <input class ="btn btn-success" type="submit" value="SUBMIT" name="submit">
                <button class ="btn btn-secondary" type="reset">RESET</button>
            </div>
        </div>
    </form>
    
</div>
<br>
<?php 
    include_once("./partials/footer.php");
}else{
    header("Location: /index.php");
}
?>
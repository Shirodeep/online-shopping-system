<?php
$addReferenceLink = array(
    array("facebook", "primary", "#"),
    array("github", "light", "#"),
    array("twitter", "primary", "#"),
    array("youtube", "danger", "#"),
);
?>
<div class="container-fluid bg-dark text-light">
    <div class="row pt-3">
        <div class="col-8">Contact us</div>
        <?php
        foreach ($addReferenceLink as $items) {
            echo "<div class='col'><a href='$items[2]'><i class='bi bi-$items[0] text-$items[1] pl-100'></i><hr style='width:4vh;'></a></div>";
        }
        ?>
    </div>
    <div class="row">
        <div class="col-6">We present everything here are of best quality and assure that you may find it<br><p class="display-2 " style="padding-left:5vh;color:yellowgreen;">ठिक छ</p></div>
        <div class="col-6 ">
            <div class="container">

                <div class="row" style="padding:1vh 0vh 0vh 2vh;">
                    <div class="col ">
                        <div class="row">mama</div>
                        <div class="row">
                            <hr style="width:10vh;">
                        </div>
                    </div>
                    <div class="col ">
                        <div class="row">mama</div>
                        <div class="row">
                            <hr style="width:10vh;">
                        </div>
                    </div>
                    <div class="col ">
                        <div class="row">mama</div>
                        <div class="row">
                            <hr style="width:10vh;">
                        </div>
                    </div>
                </div>
                <div class="row" style="padding:0vh 0vh 0vh 0vh;">
                    <div class="col">mama</div>
                    <div class="col">mama</div>
                    <div class="col">mama</div>
                </div>
                <div class="row" style="padding:0vh 0vh 0vh 0vh;">
                    <div class="col">mama</div>
                    <div class="col">mama</div>
                    <div class="col">mama</div>
                </div>
                <div class="row" style="padding:0vh 0vh 0vh 0vh;">
                    <div class="col">mama</div>
                    <div class="col">mama</div>
                    <div class="col">mama</div>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-align-center"><div class="col">&copy; Copyright all rights reserved</div></div>
</div>
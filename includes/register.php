<body>
    <?php
    include_once('./partials/header.php');
    include("./partials/dbconnection.php");
    $upload = 2;
    if ($inserted) {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
        </button>
        </div>";
    }
    if ($errorUpdatingIntoDatabase) {
        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
      </div>";
    }
    ?>

    <div class="container mr-5" style="width: 130vh;height:max-content; background-color: whitesmoke;">
        <h1 class="h1 pt-2 ">REGISTER</h1>
        <?php $title = "register"; ?>
        <form action="/includes/register.inc.php" method="post">
            <div class="form-row p-3">
                <div class="col">
                    <div class="form-row">
                        <label for="firstname">Firstname</label>&nbsp;
                        <input class="form-control col-xs-3" type="text" name="firstname" required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-row">
                        <label for="middlename">Middlename</label>&nbsp;
                        <input class="form-control col-xs-3" type="text" name="middlename" required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-row">
                        <label for="lastname">Lastname</label>&nbsp;
                        <input class="form-control col-xs-3" type="text" name="lastname" required>
                    </div>
                </div>
            </div>
            <div class="row p-3">
                <div class="col">
                    <label for="email">Email</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input class="form-control" type="email" name="email" pattern="^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$" required>
                </div>
            </div>
            <div class="row p-3">
                <div class="col">
                    <label for="contact">Contact</label> &nbsp;
                    <input class="form-control" type="text" name="contact" pattern="(\+977)?[9][7-9]\d{8}" required>
                </div>
            </div>
            <div class="row p-3">
                <div class="col">
                    <label class="form-check-label" for="Gender">Gender</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input class="form-check form-check-inline" type="radio" name="gender" value="male" id="male" required>
                    <label class="form-check-label" for="male">Male</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input class="form-check form-check-inline" type="radio" name="gender" id="female" value="female" required>
                    <label class="form-check-label" for="female">Female</label>
                </div>
            </div>
            <input class="btn btn-outline-secondary text-dark" type="submit" name="submit" value="Submit">
        </form>
    </div>
    <?php include_once('./partials/footer.php'); ?>
</body>


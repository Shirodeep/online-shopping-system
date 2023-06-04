<body>
    <?php
    include_once('./partials/header.php');
    $inserted = $_GET["q"];
    $p = $_GET["p"];
    if ($inserted == 1  and $inserted != "") {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Success!!!</strong> User created.
        </button>
        </div>";
    } elseif($inserted == 0) {
        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                <strong>Check Your Form Again!</strong> User exists!!!
                </div>";
    }
    if ($p == 0 and $p != "") {
        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
            <strong>Check Your Form Again!</strong> Your password and confirm password do not match.
          </div>";
        $p = 1;
    }


    ?>

    <div class="container mr-5" style="width: 130vh;height:max-content; background-color: whitesmoke;">
        <h1 class="h1 pt-2 ">REGISTER</h1>
        <?php $title = "register"; ?>
        <form action="/includes/register.inc.php" onsubmit="validate()" method="post">
            <div class="form-row ">
                <div class="col p-3">
                    <div class="form-row">
                        <label for="firstname">Firstname</label>&nbsp;
                        <input class="form-control col-xs-3" type="text" name="firstname" required>
                    </div>
                </div>
                <div class="col p-3">
                    <div class="form-row">
                        <label for="middlename">Middlename</label>&nbsp;
                        <input class="form-control col-xs-3" type="text" name="middlename" required>
                    </div>
                </div>
                <div class="col p-3">
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
                    <label for="password">Password</label> &nbsp;
                    <input class="form-control" type="password" name="password" id="password" required>
                </div>
            </div>
            <div class="row p-3">
                <div class="col">
                    <label for="confirmPassword">Confirm password</label> &nbsp;
                    <input class="form-control" type="password" name="confirmPassword" id="confirmPassword" required>
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
            <div class="row p-3">
                <div class="col">
                    <label for="contact">Contact</label> &nbsp;
                    <div class="row">
                        <input class="col-sm-2 col-lg-1" style="border-radius: 15%;" type="text" placeholder="+977" readonly>
                        <input class="col form-control" type="text" name="contact" id="contact" pattern="(\+977)?[9][7-9]\d{8}" required>

                    </div>
                </div>
            </div>
            <input class="btn btn-outline-secondary text-dark" type="submit" name="submit" value="Submit">
        </form>
    </div>
    <?php include_once('./partials/footer.php'); ?>
</body>
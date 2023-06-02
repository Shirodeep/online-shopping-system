<body>
    <?php include_once('./partials/header.php'); ?>
    <div class="container mr-5" style="width: 130vh;height:max-content; background-color: whitesmoke;">
        <h1 class="h1 pt-2 ">Login</h1>
        <form action="/includes/login.inc.php" method="POST">
            <div class="row p-3">
                <div class="col">
                    <label for="name">Username</label>&nbsp;
                    <input type="text" name="firstname" required>
                </div>
            </div>
            <div class="row p-3">
                <div class="col">
                    <label for="name">Password</label> &nbsp;
                    <input type="password" name="contact" required>
                </div>
            </div>
            <div class="row" style="padding-left: 41vh; width: max-content;">
                <button class="btn btn-outline-secondary text-dark" type="button" onclick="checkFormValidation()">Submit</button>
            </div>
        </form>
        <hr>
        <p>Don't have account yet <a href="./register.php"> <button class="btn btn-outline-secondary" type="button">Register</button></a>&nbsp;here</p>
    </div>
    <?php include_once('./partials/footer.php'); ?>
</body>
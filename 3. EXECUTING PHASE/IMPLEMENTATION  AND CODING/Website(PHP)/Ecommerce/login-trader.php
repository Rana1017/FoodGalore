<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="css/research.css">

<?php 
include ("partials/head.php");

?>

<body class="animsition">

    <!-- Header -->
    <?php 
include ("partials/header.php");
?>

    <div class="container m-tb-150">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">

            </div>
            <div class="col-md-4 offset-md-4 form login-form">
                <form action="" method="POST" autocomplete="">
                    <h2 class="text-center">Login Form</h2>
                    <p class="text-center">Login with your email and password.</p>
                    <?php
                    include('error.php');
                    ?>
                    <div class="form-group m-t-30">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required
                            value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="link forget-pass text-left"><a href="forgot-password.php">Forgot password?</a></div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="traderlogin" value="Login">
                    </div>
                    <div class="link login-link text-center">Not yet a trader? <a href="signup-trader.php">Signup
                            now</a></div>
                </form>
                <hr class="hr-text" data-content="OR">
                <div class="link login-link text-center">Login as Customer? <a href="login-user.php">Login</a>
                </div>

            </div>
            <div class="col-md-4 offset-md-4 form login-form">

            </div>
        </div>
    </div>


    <!-- Footer -->
    <?php 
include ("partials/footer.php");
?>
</body>

</html>
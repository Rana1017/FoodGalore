<?php
require_once "../controllerUserData.php"; 
include('adminpartials/head.php');


include('../partials/head.php')

?>


<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4 form login-form"></div>
        <div class="col-md-4 offset-md-4 form login-form">
            <form action="" method="POST" autocomplete="">
                <h2 class="text-center">Login Form</h2>
                <p class="text-center">Login with your email and password.</p>
                <?php include('../error.php');
    ?>
                <div class="form-group m-t-30"><input class="form-control" type="email" name="email"
                        placeholder="Email Address" required value="<?php echo $email ?>"></div>
                <div class="form-group"><input class="form-control" type="password" name="password"
                        placeholder="Password" required></div>
                <div class="link forget-pass text-left"><a href="forgot-password.php">Forgot password?</a></div>
                <div class="form-group"><input class="form-control button" type="submit" name="login" value="Login">
                </div>
            </form>
            <div class="link forget-pass text-center"><a href="../login-trader.php">Login as Trader</a></div>
        </div>
        <div class="col-md-4 offset-md-4 form login-form"></div>
    </div>
</div>
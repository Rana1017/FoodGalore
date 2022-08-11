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
    <div class="container m-t-100 m-b-50">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <h3 class="text-center m-b-20">SIGN UP</h3>
                <?php
                    if(count($errors) == 1){
                        ?>
                <div class="alert alert-danger text-center">
                    <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                </div>
                <?php
                    }elseif(count($errors) > 1){
                        ?>
                <div class="alert alert-danger">
                    <?php
                            foreach($errors as $showerror){
                                ?>
                    <li><?php echo $showerror; ?></li>
                    <?php
                            }
                            ?>
                </div>
                <?php
                    }
                    ?>
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="validationCustom01" class="form-label">Full name</label>
                        <input type="text" name="name" class="form-control" id="validationCustom01" required>
                    </div>


                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" required>

                    </div>
                    <div class="mb-3">
                        <label for="inputState">Gender</label>
                        <select id="inputState" class="form-control" name="gender" required>
                            <option selected>Select</option>
                            <option>Female</option>
                            <option>Male</option>
                            <option>Others</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="validationCustom06" class="form-label">Birth Date</label>
                        <input type="date" name="date" class="form-control" id="validationCustom06" required>
                    </div>

                    <div class="mb-3">
                        <label for="validationCustom03" class="form-label">Address</label>
                        <input type="text" name="address" class="form-control" id="validationCustom03" required>

                    </div>



                    <div class="mb-3">
                        <label for="validationCustom05" class="form-label">PhoneNo</label>
                        <input type="text" name="phoneno" class="form-control" id="validationCustom05" required>
                        <div class="invalid-feedback">
                            Please provide a valid phone number.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword2" class="form-label">Re-type Password</label>
                        <input type="password" name="repassword" class="form-control" id="exampleInputPassword1"
                            required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100" name="signup-customer">Signup</button>

                    <br>
                    <a href="login.php" class="ca">Already have an account?</a>
                </form>
            </div>
            <div class="col-sm-4"></div>

        </div>
    </div>


    <!-- Footer -->
    <?php 
include ("partials/footer.php");
?>
</body>

</html>
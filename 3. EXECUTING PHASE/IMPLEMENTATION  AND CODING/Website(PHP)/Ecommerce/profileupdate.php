<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<?php 
include ("partials/head.php");
?>



<body class="animsition">
    <!-- Header -->
    <?php 
include ("partials/header.php");
?>

    <!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92"
        style="background-image: url(https://images.pexels.com/photos/4466492/pexels-photo-4466492.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260);">
        <h2 class="ltext-105 cl0 txt-center text-dark">
            Update Your Profile
        </h2>
    </section>
    <div class="container m-tb-50">
        <div class="row">
            <div class="col-sm-4">
                <ul class="list-group">
                    <li class="list-group-item"><a href="profile.php">Personal Information</a> </li>
                    <li class="list-group-item"><a href="orders.php">Orders</a></li>
                    <li class="list-group-item"><a href="profileupdate.php">Update Profile</a></li>
                    <li class="list-group-item"><a href="logout.php">Logout</a></li>
                </ul>

            </div>
            <div class="col-sm-4">

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
                    <?php 
                $email = $_SESSION['email'];
                $password = $_SESSION['password'];
                if($email != false && $password != false){
                    $sql = "SELECT * FROM AMANSHRESTHA.USERS WHERE USER_EMAIL = '$email'";
                    $run_Sql = oci_parse($conn, $sql);
                    oci_execute($run_Sql);
                    if($run_Sql){
                        $fetch_info = oci_fetch_assoc($run_Sql);
                        
                    }
                }else{
                    header('Location: login-user.php');
                }
                ?>
                    <div class="mb-3">
                        <label for="validationCustom01" class="form-label">Full name</label>
                        <input type="text" name="name" class="form-control" id="validationCustom01"
                            value="<?php echo $fetch_info['USER_NAME']?>" required>
                    </div>


                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" value="<?php echo $fetch_info['USER_EMAIL']?>" required>

                    </div>


                    <div class="mb-3">
                        <label for="validationCustom03" class="form-label">Address</label>
                        <input type="text" name="address" class="form-control" id="validationCustom03"
                            value="<?php echo $fetch_info['USER_ADDRESS']?>" required>

                    </div>



                    <div class="mb-3">
                        <label for="validationCustom05" class="form-label">PhoneNo</label>
                        <input type="text" name="phoneno" class="form-control" id="validationCustom05"
                            value="<?php echo $fetch_info['USER_PHONENO']?>" required>
                        <div class="invalid-feedback">
                            Please provide a valid phone number.
                        </div>
                    </div>

                    <input type="hidden" name="form_id" value="<?php echo $fetch_info['USER_ID']?>">
                    <button type="submit" class="btn btn-primary w-100" name="update-profile">Update</button>

                    <br>

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
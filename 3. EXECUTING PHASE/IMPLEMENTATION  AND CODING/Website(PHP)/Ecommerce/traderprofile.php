<!DOCTYPE html>
<html lang="en">
<?php 
include ("partials/head.php");
?>
<?php 
include ("partials/session.php");


?>


<body class="animsition">

    <!-- Header -->
    <?php 
include ("partials/header.php");
?>
    <?php 

$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM AMANSHRESTHA.USERS WHERE user_email = '$email'";
    
	$run_Sql = oci_parse($conn, $sql);
    oci_execute($run_Sql);
    if($run_Sql){
        $fetch_info = oci_fetch_assoc($run_Sql);
        
    }
}else{
    header('Location: ../loginsignup/login-user.php');
}
?>
    <!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92"
        style="background-image: url(https://images.pexels.com/photos/4466492/pexels-photo-4466492.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260);">
        <h2 class="ltext-105 cl0 txt-center text-dark">
            WELCOME <?php echo $fetch_info['USER_NAME']?>
        </h2>
    </section>



    <div class="container m-tb-50">
        <h2 class="text-center m-tb-50">Personal Information</h2>
        <div class="row">
            <div class="col-sm-3">
                <ul class="list-group">
                    <li class="list-group-item"><a href="profile.php">Personal Information</a> </li>

                    <li class="list-group-item"><a href="admin/traderindex.php">Manage Shop</a></li>
                    <li class="list-group-item"><a href="profileupdate.php">Update Profile</a></li>
                    <li class="list-group-item"><a href="logout.php">Logout</a></li>
                </ul>

            </div>
            <div class="col-sm-6">
                <form action="" method="POST">
                    <fieldset disabled>

                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Full Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?php echo $fetch_info['USER_NAME'] ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?php echo $fetch_info['USER_EMAIL'] ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Phone</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?php echo $fetch_info['USER_PHONENO'] ?>
                                    </div>
                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Address</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?php echo $fetch_info['USER_ADDRESS'] ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Gender</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?php echo $fetch_info['USER_GENDER'] ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Birth Date</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?php echo $fetch_info['DOB'] ?>
                                    </div>
                                </div>
                                <hr>

                            </div>
                        </div>











                    </fieldset>

                    <div class="link login-link text-center">Wanna Update Profile? <a href="profileupdate.php">Update
                            now</a></div>

                </form>
            </div>
            <div class="col-sm-3"></div>

        </div>

    </div>


    <!-- Footer -->
    <?php 
include ("partials/footer.php");
?>
</body>

</html>
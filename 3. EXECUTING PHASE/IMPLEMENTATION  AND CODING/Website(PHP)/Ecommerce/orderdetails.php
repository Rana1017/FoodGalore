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
include('connect.php');
?>
    <?php
    $orderid = $_GET['order_id'];
    
    
    $sql = "SELECT * FROM AMANSHRESTHA.ORDER_DETAILS WHERE ORDER_ID = $orderid";
    $result = oci_parse($conn,$sql);
    oci_execute($result);
    
    ?>
    <!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92"
        style="background-image: url(https://images.pexels.com/photos/4466492/pexels-photo-4466492.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260);">
        <h2 class="ltext-105 cl0 txt-center text-dark">
            YOUR ORDERS DETAILS
        </h2>
    </section>



    <div class="container m-tb-50">
        <h2 class="text-center m-tb-50">Order Details</h2>
        <div class="row">
            <div class="col-sm-3">
                <ul class="list-group">
                    <li class="list-group-item"><a href="profile.php">Personal Information</a> </li>

                    <li class="list-group-item"><a href="orders.php">Orders</a></li>
                    <li class="list-group-item"><a href="profileupdate.php">Update Profile</a></li>
                    <li class="list-group-item"><a href="logout.php">Logout</a></li>
                </ul>

            </div>


            <div class="col-sm-6">



                <div class="row">
                    <?php
                 while($fetchinfo  = oci_fetch_assoc($result))

                 {
                ?>
                    <div class="col-sm-4 m-tb-20 m-rl-20">
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                ORDER_ID:
                                <span class="badge badge-primary badge-pill"><?php
                                        echo  $fetchinfo['ORDER_ID'];
                                        ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                QUANTITY:
                                <span class="badge badge-primary badge-pill"> <?php
                                        echo  $fetchinfo['QUANTITY'];
                                        ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                PRODUCT_ID:
                                <span class="badge badge-primary badge-pill"><?php
                                        echo  $fetchinfo['PRODUCT_ID'];
                                        ?></span>
                            </li>
                        </ul>



                    </div>
                    <?php
                }
                ?>

                </div>

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
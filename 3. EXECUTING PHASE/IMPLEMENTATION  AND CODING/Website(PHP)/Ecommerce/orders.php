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
    $user_id = $_SESSION['userid'];
    
    $sql = "SELECT * FROM AMANSHRESTHA.ORDERS WHERE USER_ID= $user_id";
    $result = oci_parse($conn,$sql);
    oci_execute($result);
    
    ?>
    <!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92"
        style="background-image: url(https://images.pexels.com/photos/4466492/pexels-photo-4466492.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260);">
        <h2 class="ltext-105 cl0 txt-center text-dark">
            YOUR RECENT ORDERS
        </h2>
    </section>



    <div class="container m-tb-50">
        <h2 class="text-center m-tb-50">Order Information</h2>
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
                 while($fetch = oci_fetch_assoc($result))

                 {
                ?>
                    <div class="col-sm-4 m-tb-10">

                        <div class="card text-center">

                            <div class="card-body">
                                <h5 class="card-title">ORDER
                                    <?php
                                    $orderid=$fetch['ORDER_ID'];
                                    echo $orderid;
                                    ?>
                                </h5>

                                <a href="orderdetails.php?order_id=<?php echo $orderid?>" class="btn btn-primary">View
                                    Orders</a>
                            </div>

                        </div>
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
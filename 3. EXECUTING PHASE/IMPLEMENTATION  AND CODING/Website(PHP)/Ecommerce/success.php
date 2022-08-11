<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
include ("partials/head.php");
?>

<body class="animsition">

    <?php 
include ("partials/header.php");
?>


    <?php
    include('orderhandler.php');

    ?>

    <style>
        body {
            background: #f2f2f2;
        }

        .payment {
            border: 1px solid #f2f2f2;
            height: 320px;
            border-radius: 20px;
            background: #fff;
        }

        .payment_header {
            background: #4BB543;
            padding: 20px;
            border-radius: 20px 20px 0px 0px;

        }

        .check {
            margin: 0px auto;
            width: 50px;
            height: 50px;
            border-radius: 100%;
            background: #fff;
            text-align: center;
        }

        .check i {
            vertical-align: middle;
            line-height: 50px;
            font-size: 30px;
        }

        .content {
            text-align: center;
        }

        .content h1 {
            font-size: 25px;
            padding-top: 25px;
        }
    </style>
    <div class="container m-t-50 p-t-50 m-b-50 p-b-50">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div class="payment">
                    <div class="payment_header">
                        <div class="check"><i class="fa fa-check" aria-hidden="true"></i></div>
                    </div>
                    <div class="content p-all-25">
                        <h1>Payment Success !</h1>
                        <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print,
                            graphic
                            or web designs. </p>
                        <div class="p-all-25">
                            <a href="index.php">
                                <button type="button" class="btn btn-outline-primary">SHOP MORE</button>

                            </a>

                            <a href="invoice.php">
                                <button type="button" class="btn btn-outline-primary">Invoice</button>

                            </a>
                        </div>
                    </div>
                </div>



            </div>
            <div class=" col-sm-3"></div>

        </div>
    </div>
    <?php
    $sql = "SELECT * FROM AMANSHRESTHA.CART c
    INNER JOIN AMANSHRESTHA.USERS u ON u.user_id=c.user_id
    WHERE u.user_email='$_SESSION[email]'";
    
    
    $result = oci_parse($conn, $sql);
    oci_execute($result);
    
    while ($cart = oci_fetch_assoc($result))
    {
        $cartid = $cart['CART_ID'];
    }
    
    $deletesql = "DELETE FROM AMANSHRESTHA.CART_DETAILS WHERE CART_ID = $cartid";
    $result = oci_parse($conn,$deletesql);
    oci_execute($result);


    $del = "DELETE FROM AMANSHRESTHA.CART WHERE CART_ID = $cartid";
        $resultdel = oci_parse($conn,$del);
        oci_execute($resultdel);


    
    
    ?>
    <?php 
include ("partials/footer.php");
?>
</body>

</html>
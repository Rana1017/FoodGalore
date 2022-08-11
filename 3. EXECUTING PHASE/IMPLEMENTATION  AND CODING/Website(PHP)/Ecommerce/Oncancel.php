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
        background: #FF0000;
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
                    <div class="check"><i class="fa fa-times"></i></div>
                    
                </div>
                <div class="content p-all-25">
                    <h1>Payment Failed!</h1>
                    <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic
                        or web designs. </p>
                        <div class="p-all-25">
                        <a href="shoping-cart.php">
                        <button type="button" class="btn btn-outline-primary">TRY AGAIN</button>
                        </a>
                        </div>
                        </div>
            </div>
            


        </div>
        <div class="col-sm-3"></div>

    </div>
</div>

<?php 
include ("partials/footer.php");
?>
</body>

</html>
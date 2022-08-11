<?php require_once "../controllerUserData.php"; ?>
<!DOCTYPE html>
<html>
<?php

 
  include ('traderpartials/head.php');
  
?>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <?php
  include ('traderpartials/header.php');
  ?>

        <!-- Left side column. contains the logo and sidebar -->
        <?php
  include ('traderpartials/aside.php');
  ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Dashboard
                    <small>Control panel</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Dashboard</li>
                </ol>



            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">

                        <form role="form" action="" method="POST">

                            <?php include('../error.php');
                         ?>
                            <?php
                             $newid = $_GET['up_id'];
                             include('../partials/connection.php');

                             $sql = "SELECT * from AMANSHRESTHA.SHOP where SHOP_ID = '$newid'";
                             $results = oci_parse($conn, $sql);
                             oci_execute($results);
                             $final = oci_fetch_assoc($results);
                            ?>
                            <h1>Shop</h1>
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="shop">Shop</label>
                                    <input type="text" class="form-control" id="shop" placeholder="Enter Shop Name"
                                        name="shop-name" value="<?php echo $final['SHOP_NAME']?>">

                                    <div class="form-group">
                                        <label for="exampleFile">PRODUCT IMAGE LINK</label>
                                        <input type="text" class="form-control" placeholder="IMAGE LINK" name="file"
                                            value="<?php echo $final['SHOP_IMAGE']?>">

                                    </div>
                                    <input type="hidden" name="form_id" value="<?php echo $final['SHOP_ID']?>">
                                </div>

                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">

                                <button type="submit" class="btn btn-primary" name="update-shop">Submit</button>
                            </div>
                        </form>

                    </div>
                    <div class="col-sm-3"></div>


                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php
  include ('traderpartials/footer.php');
  ?>
</body>

</html>
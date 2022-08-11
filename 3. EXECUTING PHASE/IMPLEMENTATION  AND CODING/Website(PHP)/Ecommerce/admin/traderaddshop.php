<?php require_once "../ControllerUserData.php"; ?>
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
                            <h1>Shop</h1>
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="shop">Shop</label>
                                    <input type="text" class="form-control" id="shop" placeholder="Enter Shop Name"
                                        name="shop-name">
                                </div>
                                <!-- <div class="form-group">
                                    <label for="exampleFormControlFile1">Upload Shop Image</label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1"
                                        name="file">

                                </div> -->
                                <div class="form-group">
                                    <label for="exampleFile">SHOP IMAGE LINK</label>
                                    <input type="text" class="form-control" placeholder="IMAGE LINK" name="file">

                                </div>

                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">

                                <button type="submit" class="btn btn-primary" name="submit-trader-shop">Submit</button>
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
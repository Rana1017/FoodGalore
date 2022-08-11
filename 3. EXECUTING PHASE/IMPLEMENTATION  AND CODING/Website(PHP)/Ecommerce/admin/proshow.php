<!DOCTYPE html>
<html>
<?php
  include ('adminpartials/session.php');
  include ('adminpartials/head.php');
  ?>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <?php
  include ('adminpartials/header.php');
  ?>

        <!-- Left side column. contains the logo and sidebar -->
        <?php
  include ('adminpartials/aside.php');
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
                    
                    <div class="col-sm-9">
                    
                    <?php
                    include('../partials/connection.php');

                    $id = $_GET['pro_id'];
                    $product = "SELECT * from AMANSHRESTHA.products WHERE PRODUCT_ID='$id'";
                    $result = oci_parse($conn, $product);
                    oci_execute($result);
                    $final = oci_fetch_assoc($result);
                    ?>
    <h3>Name : <?php echo $final['PRODUCT_NAME']?></h3> <hr> <br>
                   
    <h3>Price : <?php echo $final['PRODUCT_PRICE']?></h3> <hr> <br>
    <h3>Description : <?php echo $final['PRODUCT_DESCRIPTION']?></h3> <hr> <br>
     <img src="../<?php $final['PRODUCT_PICTURE']?>" alt="No File" style="height: 300px;width=300px;">

                    </div>


                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php
  include ('adminpartials/footer.php');
  ?>
</body>

</html>
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
  include ('adminpartials/adminaside.php');
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
            <section class="content">
                <div class="row">
                    <div class="col-sm-6">
                        <h2 class="text-center">List of Shops</h2>
                        <?php
                        include('../connect.php');
                    $shop = "SELECT * from AMANSHRESTHA.SHOP";
                    $result = oci_parse($conn, $shop);
                    oci_execute($result);
                    ?>
                        <table class="table text-center">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">SHOP NAME</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                    while($final = oci_fetch_assoc($result))
                    {
                        ?>
                                <tr>
                                    <th scope="row"><?php echo $final['SHOP_ID']?></th>
                                    <td>
                                        <?php echo $final['SHOP_NAME']?>
                                    </td>
                                </tr>
                                <?php
                    }
                    ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-6">
                        <h2 class="text-center">List of Customer</h2>
                        <?php
                        include('../connect.php');
                    $shop = "SELECT * from AMANSHRESTHA.USERS WHERE USER_TYPE='Customer'";
                    $result = oci_parse($conn, $shop);
                    oci_execute($result);
                    ?>
                        <table class="table text-center">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">EMAIL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                    while($final = oci_fetch_assoc($result))
                    {
                        ?>
                                <tr>
                                    <th scope="row"><?php echo $final['USER_ID']?></th>
                                    <td>
                                        <?php echo $final['USER_NAME']?>
                                    </td>
                                    <td>
                                        <?php echo $final['USER_EMAIL']?>
                                    </td>
                                </tr>
                                <?php
                    }
                    ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="row">
                    <div class="col-sm-2"> </div>

                    <div class="col-sm-8">
                        <?php
                    include('../partials/connection.php');
                    $product = "SELECT * from AMANSHRESTHA.products ORDER BY PRODUCT_NAME ASC";
                    $result = oci_parse($conn, $product);
                    oci_execute($result);
                    ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">NAME</th>
                                    <th scope="col">PRICE</th>

                                    <th scope="col">STOCK</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                    while($final = oci_fetch_assoc($result))
                    {
                        ?>
                                <tr>
                                    <th scope="row"><?php echo $final['PRODUCT_ID']?></th>
                                    <td><a href="adminproductdetail.php?pro_id=<?php echo $final['PRODUCT_ID']?>">
                                            <?php echo $final['PRODUCT_NAME']?>
                                        </a></td>
                                    <td>
                                        <?php echo $final['PRODUCT_PRICE']?>
                                    </td>

                                    <td>
                                        <?php echo $final['PRODUCT_STOCK']?>
                                    </td>

                                </tr>
                                <?php
                    }
                    ?>
                            </tbody>
                        </table>

                    </div>
                    <div class="col-sm-2"> </div>

                </div>
            </section>
        </div>
        <!-- /.content-wrapper -->
        <?php
  include ('adminpartials/footer.php');
  ?>
</body>

</html>
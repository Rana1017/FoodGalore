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
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">

                        <?php
                        include('../connect.php');
                    $shop = "SELECT * from AMANSHRESTHA.SHOP";
                    $result = oci_parse($conn, $shop);
                    oci_execute($result);
                    ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">SHOP NAME</th>
                                    <th scope="col">UPDATE</th>
                                    <th scope="col">DELETE</th>
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
                                    <td><a href="adminshopupdate.php?up_id=<?php echo $final['SHOP_ID']?>">
                                            <button class="btn btn-primary">Update</button>
                                        </a></td>
                                    <td><a href="adminshopdelete.php?del_id=<?php echo $final['SHOP_ID']?>">
                                            <button class="btn btn-danger">Delete</button>
                                        </a></td>
                                </tr>
                                <?php
                    }
                    ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-2"></div>
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
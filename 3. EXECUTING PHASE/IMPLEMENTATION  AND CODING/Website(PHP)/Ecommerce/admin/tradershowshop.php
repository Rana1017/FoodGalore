<!DOCTYPE html>
<html>
<?php
  include ('traderpartials/session.php');
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

                    <div class="col-sm-2"></div>

                    <div class="col-sm-8">
                        <a href="traderaddshop.php">
                            <button class="btn btn-warning">Add New</button>
                        </a>

                        <?php
                        include('../connect.php');
                        $email = $_SESSION['email'];
                        $password = $_SESSION['password'];
                        $sql = "SELECT * FROM AMANSHRESTHA.USERS WHERE USER_EMAIL = '$email' AND USER_PASSWORD ='$password'";
                        $result = oci_parse($conn, $sql);
                        oci_execute($result);
                        $row = oci_fetch_assoc($result);
                        $trader_id = $row['USER_ID'];
                        

                    

                    $shop = "SELECT * from AMANSHRESTHA.SHOP WHERE USER_ID = '$trader_id'";
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
                                    <td><a href="tradershopupdate.php?up_id=<?php echo $final['SHOP_ID']?>">
                                            <button class="btn btn-primary">Update</button>
                                        </a></td>
                                    <td><a href="tradershopdelete.php?del_id=<?php echo $final['SHOP_ID']?>">
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
  include ('traderpartials/footer.php');
  ?>
</body>

</html>
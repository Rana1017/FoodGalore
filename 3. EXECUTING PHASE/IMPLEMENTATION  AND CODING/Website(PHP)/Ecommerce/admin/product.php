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

                        <form role="form" action="" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="exampleInputName1">Product Name</label>
                                <input type="text" class="form-control" id="exampleInputName1"
                                    placeholder="Enter Product Name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPrice1">Price</label>
                                <input type="text" class="form-control" id="exampleInputPrice1"
                                    placeholder="Product Price" name="price">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPRODUCTSTOCK">PRODUCT STOCK</label>
                                <input type="text" class="form-control" id="exampleInputPRODUCTSTOCK1"
                                    placeholder="Product Stock" name="productstock">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputMINORDER">MIN ORDER</label>
                                <input type="text" class="form-control" id="exampleInputMIN_ORDER1"
                                    placeholder="Min Order" name="min">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPrice1">MAX ORDER</label>
                                <input type="text" class="form-control" id="exampleInputMAXORDER1"
                                    placeholder="Max Order" name="max">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlFile1">Upload Product Image</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Description</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                    name="description"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Shop</label>
                                <select class="custom-select" name="shop" id="id">
                                    <?php
                                        
                                        
                                        $email=$_SESSION['email'];
                                        $password = $_SESSION['password'];
                                        $sql = "SELECT * FROM AMANSHRESTHA.USERS WHERE USER_EMAIL = '$email' AND USER_PASSWORD ='$password'";
                                        $result = oci_parse($conn,$sql);
                                        oci_execute($result);
                                        $row = oci_fetch_assoc($result);
                                        $trader_id = $row['USER_ID'];
                                        $shop = "SELECT * from AMANSHRESTHA.SHOP WHERE USER_ID = '$trader_id'";
                                        $result = oci_parse($conn, $shop);
                                        oci_execute($result);
                                        
                                        
                                        while($final= oci_fetch_assoc($result))
                                        {
                                          echo "<option value=".$final['SHOP_ID'].">".$final['SHOP_NAME']."</option>";
                                        }
                                        ?>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary" name="productsubmit">Submit</button>



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
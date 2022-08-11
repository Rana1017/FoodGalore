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
  include ('./adminpartials/adminaside.php');
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


                        <form role="form" action="proupdatehandler.php" method="post" enctype="multipart/form-data">
                            <?php
                             $newid = $_GET['up_id'];
                             include('../partials/connection.php');

                             $sql = "SELECT * from AMANSHRESTHA.products where PRODUCT_ID = '$newid'";
                             $results = oci_parse($conn, $sql);
                             oci_execute($results);
                             $final = oci_fetch_assoc($results);
                            ?>
                            <h1>Products</h1>
                            <div class="form-group">
                                <label for="exampleInputName1">Product Name</label>
                                <input type="text" class="form-control" id="exampleInputName1"
                                    placeholder="Enter Product Name" value="<?php echo $final['PRODUCT_NAME']?>"
                                    name="name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPrice1">Price</label>
                                <input type="text" class="form-control" id="exampleInputPrice1"
                                    placeholder="Product Price" name="price"
                                    value="<?php echo $final['PRODUCT_PRICE']?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPrice1">Discount</label>
                                <input type="text" class="form-control" id="exampleInputPrice1" placeholder="Discount"
                                    name="discount" maxlength="2" value="<?php echo $final['DISCOUNT']?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPRODUCTSTOCK">PRODUCT STOCK</label>
                                <input type="text" class="form-control" id="exampleInputPRODUCTSTOCK1"
                                    placeholder="Product Stock" name="productstock"
                                    value="<?php echo $final['PRODUCT_STOCK']?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputMINORDER">MIN ORDER</label>
                                <input type="text" class="form-control" id="exampleInputMIN_ORDER1"
                                    placeholder="Min Order" name="min" value="<?php echo $final['MIN_ORDER']?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPrice1">MAX ORDER</label>
                                <input type="text" class="form-control" id="exampleInputMAXORDER1"
                                    placeholder="Max Order" name="max" value="<?php echo $final['MAX_ORDER']?>">
                            </div>

                            <div class="form-group">
                                <label for="exampleFile">PRODUCT IMAGE LINK</label>
                                <input type="text" class="form-control" placeholder="IMAGE LINK" name="file"
                                    value="<?php echo $final['PRODUCT_PICTURE']?>">

                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Allergy Information</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                    name="allergy"><?php echo $final['ALLERGY']?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Description</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                    name="description"><?php echo $final['PRODUCT_DESCRIPTION']?></textarea>
                            </div>
                            <input type="hidden" name="form_id" value="<?php echo $final['PRODUCT_ID']?>">


                            <button type="submit" class="btn btn-primary" name="adminupdateproduct">Submit</button>



                        </form>
                    </div>
                    <div class="col-sm-3"></div>


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
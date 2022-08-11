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

                    <div class="col-sm-2"></div>

                    <div class="col-sm-8">
                       <?php
                        include('../connect.php');
                        
                        

                    

                    $shop = "SELECT * from AMANSHRESTHA.USERS WHERE USER_TYPE='Customer'";
                    $result = oci_parse($conn, $shop);
                    oci_execute($result);
                    

                    while($final = oci_fetch_assoc($result))
                    {
                        ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">EMAIL</th>
                                    <th scope="col">GENDER</th>
                                    <th scope="col">DATE OF BIRTH</th>
                                    <th scope="col">ADDRESS</th>
                                    <th scope="col">PHONE NO.</th>
                                    <th scope="col">STATUS</th>
                                    <th scope="col">DELETE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"><?php echo $final['USER_ID']?></th>
                                    
                                        <td>
                                            <?php echo $final['USER_NAME']?>

                                        </td>
                                        <td>
                                            <?php echo $final['USER_EMAIL']?>

                                        </td>
                                        <td>
                                            <?php echo $final['USER_GENDER']?>

                                        </td>
                                        <td>
                                            <?php echo $final['DOB']?>

                                        </td>
                                        <td>
                                            <?php echo $final['USER_ADDRESS']?>

                                        </td>
                                        <td>
                                            <?php echo $final['USER_PHONENO']?>

                                        </td>
                                        <td>
                                            <?php echo $final['USER_STATUS']?>

                                        </td>
                                        
                                    <td><a href="admincustomerdelete.php?del_id=<?php echo $final['USER_ID']?>">
                                            <button class="btn btn-danger">Delete</button>
                                        </a></td>
                                        
                                </tr>
                            </tbody>
                        </table>










                       
                        <?php
                    
                   
                    }
                    ?>

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
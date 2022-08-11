<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="css/research.css">
<?php
      include ("partials/head.php");
      session_start();
      include ('connect.php');
      
      ?>
<?php
      $email = $_SESSION['email'];
      $password = $_SESSION['password'];
      if ($email != false && $password != false)
      {
          $sql = "SELECT * FROM AMANSHRESTHA.USERS WHERE user_email = '$email'";
      
          $run_Sql = oci_parse($conn, $sql);
          oci_execute($run_Sql);
          if ($run_Sql)
          {
              $fetch_info = oci_fetch_assoc($run_Sql);
      
              $username = $fetch_info['USER_NAME'];
              $address = $fetch_info['USER_ADDRESS'];
              $phone = $fetch_info['USER_PHONENO'];
          }
      }
      else
      {
          header('Location: login-user.php');
      }
      ?>


<body class="animsition">
    <!-- Header -->
    <?php
         include ("partials/header.php");
         ?>
    <!-- breadcrumb -->
    <div class="container">





    </div>

    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-body p-0">
                    <div class="row px-5 pt-3">
                        <div class="col-md-6">
                            <img src="images\a.png" alt="" style="width:12em; height:15em;">
                        </div>
                        <div class="col-md-6 text-right">
                            <p class="font-weight-bold mb-1">Invoice</p>
                            <p class="text">2021/7/15</p>
                        </div>
                    </div>
                    <hr class="my-2">
                    <div class="row pb-5 p-5">
                        <div class="col-md-6">
                            <p class="font-weight-bold mb-4">Customer Information</p>
                            <p class="mb-1">
                                <?php
                                 echo $username;
                                 ?>
                            </p>
                            <p><?php
                              echo $address;
                              ?></p>
                            <p class="mb-1"><?php
                              echo $phone;
                              ?></p>
                        </div>
                        <div class="col-md-6 text-right">
                            <p class="font-weight-bold mb-4">Payment Details</p>
                            <p class="mb-1"><span class="text-muted">Payment Status: </span> Paid</p>
                            <p class="mb-1"><span class="text-muted">Payment Type: </span> Paypal</p>
                        </div>
                    </div>
                    <div class="row p-5">
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="column-1">Name</th>
                                        <th class="column-2">Price</th>
                                        <th class="column-3">Quantity</th>
                                        <th class="column-5">Total</th>
                                    </tr>
                                    <?php
                                    $sql = "SELECT * FROM AMANSHRESTHA.DISCOUNT";
                                    $result = oci_parse($conn, $sql);
                                    
                                    oci_execute($result);
                                    $fetch = oci_fetch_assoc($result);
                                    $discount = $fetch['DISCOUNT'];
                                    $total = 0;
                                    $tax = .13;
                                    $taxamount = 0;
                                    $discountamount = 0;
                                    
                                    if (isset($_SESSION['cart']))
                                    {
                                    
                                        foreach ($_SESSION['cart'] as $key => $value)
                                        {
                                    
                                            $total = $total + (int)$value['item_price'] * (int)$value['quantity'];
                                            $taxamount = $total * $tax;
                                            $discountamount = $total * $discount/100;
                                            $t = (int)$value['item_price'] * (int)$value['quantity'];
                                    
                                    ?>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="column-1"><?php echo $value['item-name'] ?></td>
                                        <td class="column-2"><?php echo "$" . $value['item_price'] ?></td>
                                        <td class="column-3">
                                            <?php echo $value['quantity'] ?>
                                        </td>
                                        <td class="column-5"><?php echo "$" . $t ?></td>
                                    </tr>
                                    <?php
                                    }
                                    }
                                    ?>
                        </div>
                    </div>
                    </tr>
                    </tbody>
                    </table>
                </div>
            </div>
            <div class="d-flex flex-row-reverse bg-dark text-white p-4">
                <div class="py-3 px-5 text-right">
                    <div class="mb-2">Sub - Total amount</div>
                    <div class="h2 font-weight-light"><?php echo "$" . $total ?></div>
                </div>
                <div class="py-3 px-5 text-right">
                    <div class="mb-2">Tax</div>
                    <div class="h2 font-weight-light"><?php echo $tax * 100 . "%" ?></div>
                </div>
                <div class="py-3 px-5 text-right">
                    <div class="mb-2">Discount</div>
                    <div class="h2 font-weight-light"><?php echo $discount . "%" ?></div>
                </div>
                <div class="py-3 px-5 text-right">
                    <div class="mb-2">Grand Total</div>
                    <div class="h2 font-weight-light">
                        <?php
                           $total = $taxamount + $total - $discountamount;
                           echo "$ " . $total 
                       
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="container m-tb-100">
        <button type="button" class="btn btn-primary" onclick="window.print()">Print this invoice</button>

    </div>
    </div>
    <!-- Footer -->
    <?php
    unset($_SESSION['cart']);
         include ("partials/footer.php");
         ?>
</body>

</html>
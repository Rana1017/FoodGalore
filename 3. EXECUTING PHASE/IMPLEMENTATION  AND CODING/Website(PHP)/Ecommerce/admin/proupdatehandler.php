<?php
include("../partials/connection.php");

// when admin update their Product
if (isset($_POST['adminupdateproduct']))
{
    $newid = $_POST['form_id'];
    $newname = $_POST['name'];
    $newprice = $_POST['price'];
    $newdis = $_POST['discount'];
    $newdesc = $_POST['description'];
    $newallergy = $_POST['allergy'];
    $newshop = $_POST['shop'];
    $newstock = $_POST['productstock'];
    $newmin = $_POST['min'];
    $newmax = $_POST['max'];
    $file = $_POST['file'];
    $sql = "UPDATE AMANSHRESTHA.PRODUCTS set PRODUCT_NAME='$newname',ALLERGY = '$newallergy', PRODUCT_PRICE='$newprice', DISCOUNT = '$newdis',
PRODUCT_DESCRIPTION ='$newdesc',SHOP_ID='$newshop',PRODUCT_PICTURE='$file', PRODUCT_STOCK = '$newstock' ,MIN_ORDER ='$newmin' ,MAX_ORDER='$newmax' where PRODUCT_ID='$newid'";
    
    $result = oci_parse($conn, $sql);
    oci_execute($result);
    if ($result)
    {
        header('location: adminshowproduct.php');
    }
    else
    {
        header('location:adminindex.php');
    }
}


?>
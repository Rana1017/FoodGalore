<?php
include ('../partials/connection.php');
$newid=$_GET['del_id'];

$shop = "DELETE FROM AMANSHRESTHA.SHOP WHERE SHOP_ID='$newid'";
$result = oci_parse($conn, $shop);
oci_execute($result);


$product = "DELETE FROM AMANSHRESTHA.PRODUCTS WHERE SHOP_ID='$newid'";
$proresult = oci_parse($conn, $product);
oci_execute($proresult);

if($result){
    header('location: tradershowshop.php');
}else{
    echo "NOT DELETED";
}
?>
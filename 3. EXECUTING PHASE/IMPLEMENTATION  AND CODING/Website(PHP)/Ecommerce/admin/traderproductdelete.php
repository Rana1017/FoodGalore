<?php
include ('../partials/connection.php');
$newid=$_GET['del_id'];

$product = "DELETE FROM AMANSHRESTHA.products WHERE PRODUCT_ID='$newid'";
$result = oci_parse($conn, $product);
oci_execute($result);
if($result){
    header('location: tradershowproduct.php');
}else{
    echo "NOT DELETED";
}
?>
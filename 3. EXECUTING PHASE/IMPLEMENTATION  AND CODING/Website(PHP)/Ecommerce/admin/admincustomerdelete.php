<?php
include ('../partials/connection.php');
$newid=$_GET['del_id'];

$shop = "DELETE FROM AMANSHRESTHA.USERS WHERE USER_ID='$newid'";
$result = oci_parse($conn, $shop);
oci_execute($result);
if($result){
    header('location: admincustomer.php');
}else{
    echo "NOT DELETED";
}
?>
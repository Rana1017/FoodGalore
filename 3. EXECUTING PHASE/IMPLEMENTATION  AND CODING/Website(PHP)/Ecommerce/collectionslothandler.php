<?php
session_start();
include('connect.php');
$day= $_POST['day'];
$slot = $_POST['slot'];

$userid = $_SESSION['userid'];

$sql = "INSERT INTO AMANSHRESTHA.COLLECTIONSLOT (USER_ID,COLLECTION_DAY,COLLECTION_SLOT) VALUES ($userid,'$day', '$slot')";

$result = oci_parse($conn,$sql);
oci_execute($result);

header("Location: shoping-cart.php");
exit();

?>
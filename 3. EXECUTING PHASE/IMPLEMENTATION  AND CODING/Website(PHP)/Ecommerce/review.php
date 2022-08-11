<?php
include('partials/session.php');
require "connect.php";


if(isset($_POST['reviewsubmit']))
{

	if(empty($_SESSION['email'] && $_SESSION['password']))
		{
			header('location:login-user.php');
		}
else {
	$userid = $_SESSION['userid'];
        $productid = $_GET['productid'];
		$review = $_POST['review'];
		$rating = $_POST['rating'];

		$sql = "INSERT INTO AMANSHRESTHA.REVIEW (USER_ID,PRODUCT_ID,REVIEW,RATING)
		VALUES($userid,$productid,'$review',$rating)";
		$result = oci_parse($conn,$sql);
		oci_execute($result);
}
		



// $prosql = "INSERT INTO AMANSHRESTHA.PRODUCTS (PRODUCT_REVIEW,PRODUCT_RATING) VALUES ('$review',$rating)  WHERE PRODUCT_ID=$productid";
		
// $proresult = oci_parse($conn,$prosql);
// oci_execute($proresult);


if($sql)
{
	header("Location: products.php");
	exit();
}

// $ratingsql = "INSERT INTO AMANSHRESTHA.RATING (USER_ID,PRODUCT_ID,RATING)VALUES($userid,$productid,'$rating')";

// $result = oci_parse($conn,$ratingsql);
// oci_execute($result);


}

?>
<?php
session_start();
include('connect.php');
$qty = $_POST['quantity'];
$product_id = $_GET['product_id'];
$cartid = 0;
if(isset($_POST['update'])){
    


    $sql = "SELECT * FROM AMANSHRESTHA.CART c
    INNER JOIN AMANSHRESTHA.USERS u ON u.user_id=c.user_id
    WHERE u.user_email='$_SESSION[email]'";
    
    
    $result = oci_parse($conn, $sql);
    oci_execute($result);
    
    while ($cart = oci_fetch_assoc($result))
    {
        $cartid = $cart['CART_ID'];
    }
    
    $updatesql = "UPDATE AMANSHRESTHA.CART_DETAILS SET QUANTITY=$qty WHERE CART_ID = $cartid AND PRODUCT_ID = $product_id";
    $result = oci_parse($conn,$updatesql);
    oci_execute($result);
    


    foreach($_SESSION['cart'] as $key => $value){
        if($value['item-name']==$_POST['item-name']){
            $_SESSION['cart'][$key]['quantity']=$qty;
            echo "<script>
            alert('ITEM UPDATED');
            window.location.href='shoping-cart.php';
            </script>";
        }
    }
}


?>
<?php
include('connect.php');
$product_id = $_GET['product_id'];
$cartid = 0;

echo $product_id;

session_start();
if(isset($_POST['remove'])){

    $sql = "SELECT * FROM AMANSHRESTHA.CART c
    INNER JOIN AMANSHRESTHA.USERS u ON u.user_id=c.user_id
    WHERE u.user_email='$_SESSION[email]'";
    
    
    $result = oci_parse($conn, $sql);
    oci_execute($result);
    
    while ($cart = oci_fetch_assoc($result))
    {
        $cartid = $cart['CART_ID'];
    }
    
    $deletesql = "DELETE FROM AMANSHRESTHA.CART_DETAILS WHERE CART_ID = $cartid AND PRODUCT_ID = $product_id";
    $result = oci_parse($conn,$deletesql);
    oci_execute($result);


    foreach($_SESSION['cart'] as $key => $value){
        if($value['item-name']==$_POST['item-name']){
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart']=array_values($_SESSION['cart']);
            echo "<script>
            alert('ITEM REMOVED');
            window.location.href='shoping-cart.php';
            </script>";
        }
    }
}


?>
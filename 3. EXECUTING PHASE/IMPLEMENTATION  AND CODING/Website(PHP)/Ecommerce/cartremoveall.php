<?php
include('connect.php');

$cartid = 0;



session_start();
if(isset($_POST['removeall'])){

    $sql = "SELECT * FROM AMANSHRESTHA.CART c
    INNER JOIN AMANSHRESTHA.USERS u ON u.user_id=c.user_id
    WHERE u.user_email='$_SESSION[email]'";
    
    
    $result = oci_parse($conn, $sql);
    oci_execute($result);
    
    while ($cart = oci_fetch_assoc($result))
    {
        $cartid = $cart['CART_ID'];
    }
    
    $deletesql = "DELETE FROM AMANSHRESTHA.CART_DETAILS WHERE CART_ID = $cartid";
    $result = oci_parse($conn,$deletesql);
    oci_execute($result);


    


    unset($_SESSION['cart']);
    echo "<script>
            alert('ITEM REMOVED');
            window.location.href='shoping-cart.php';
            </script>";
}


?>
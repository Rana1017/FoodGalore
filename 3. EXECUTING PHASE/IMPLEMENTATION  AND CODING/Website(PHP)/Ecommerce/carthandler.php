<?php
include('connect.php');
session_start();
$email = $_SESSION['email'];
$userid = $_SESSION['userid'];
$product = $_GET['cart_id'];
$cartid = 0;
$errors = array();

if(empty($_SESSION['email'] && $_SESSION['password']))
{
    
    header('location:login-user.php');
    
}
else {
    
    $sql = "INSERT INTO AMANSHRESTHA.CART (USER_ID) VALUES ($userid)";
    $result = oci_parse($conn,$sql);
    oci_execute($result);

$sql = "SELECT * FROM AMANSHRESTHA.CART c
INNER JOIN AMANSHRESTHA.USERS u ON u.user_id=c.user_id
WHERE u.user_email='$email'";


$result = oci_parse($conn, $sql);
oci_execute($result);

while ($cart = oci_fetch_assoc($result))
{
    $cartid = $cart['CART_ID'];
}

$sql = "INSERT INTO AMANSHRESTHA.CART_DETAILS (CART_ID, QUANTITY , PRODUCT_ID) VALUES ($cartid,1,$product)";
$result = oci_parse($conn, $sql);
oci_execute($result);



if(isset($_SESSION['cart']))
{
    $checker = array_column($_SESSION['cart'],'item-name');
    if(in_array($_GET['cart_name'],$checker))
    {
        echo "<script>
        alert('Product is already in the cart.');
        window.location.href='products.php';
        </script>";
        
    }else{
    $count =count($_SESSION['cart']);
    $_SESSION['cart'][$count]=array('item_id' => $_GET['cart_id'],'item-name'=>$_GET['cart_name'],
    'item_price'=>$_GET['cart_price'], 'quantity'=>1);
    echo "<script> alert('Product Added');
    window.location.href='products.php';
    </script>";
    
    }
}
else
{
    $_SESSION['cart'] [0] = array('item_id'=>$_GET['cart_id'],'item-name'=>$_GET['cart_name'],
    'item_price'=>$_GET['cart_price'], 'quantity'=>1);
    echo "<script> alert('Product Added');
    window.location.href='products.php';
    </script>";


}
}
?>
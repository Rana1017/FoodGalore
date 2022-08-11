<?php
include ('connect.php');
$total = $_SESSION['total'];
$userid = $_SESSION['userid'];
$orderid = null;
$date = date("m-d-Y");
if ((isset($_SESSION['email']) and isset($_SESSION['password'])))
{
    $date = date("m-d-Y");
    $admin = "amanshrestha";

    $sql = "INSERT INTO AMANSHRESTHA.ORDERS (USER_ID,ORDER_DATE,ADMIN) VALUES ($userid,TO_DATE('$date', 'MM/DD/YYYY'),'$admin')";
    $result = oci_parse($conn, $sql);
    oci_execute($result);

    
    $cartsql = "SELECT * FROM AMANSHRESTHA.CART WHERE USER_ID = $userid";
    $cartresult = oci_parse($conn, $cartsql);
    oci_execute($cartresult);

    $ordersql = "SELECT * FROM AMANSHRESTHA.ORDERS WHERE USER_ID = $userid ORDER BY ORDER_ID ";
    $result = oci_parse($conn, $ordersql);
    oci_execute($result);
    
    while ($fetch = oci_fetch_assoc($result))
    {
        $orderid = $fetch['ORDER_ID'];
    }
    while ($fetch = oci_fetch_assoc($cartresult))
    {
        $cartsql = "SELECT * FROM AMANSHRESTHA.CART_DETAILS c
        INNER JOIN AMANSHRESTHA.CART u ON u.cart_id=c.cart_id
        WHERE u.user_id='$userid'";
        $result = oci_parse($conn, $cartsql);
        oci_execute($result);
        while ($fetch = oci_fetch_assoc($result))
        {
            $qty = $fetch['QUANTITY'];
            $productid = $fetch['PRODUCT_ID'];
            $date = date("m-d-Y");


            $insertsql = "INSERT INTO AMANSHRESTHA.ORDER_DETAILS (ORDER_ID,QUANTITY,PRODUCT_ID) 
            VALUES ($orderid,$qty,$productid)";
            

                $insertresult = oci_parse($conn, $insertsql);
                oci_execute($insertresult);
        }
    }
   $insertpayment = "INSERT INTO AMANSHRESTHA.PAYMENT (ORDER_ID,USER_ID,TOTAL_AMOUNT,PAYMENT_DATE)
    VALUES ($orderid,$userid,$total,TO_DATE('$date', 'MM/DD/YYYY'))";
        $paymentresult = oci_parse($conn, $insertpayment);
        oci_execute($paymentresult);

        $deld = "DELETE FROM AMANSHRESTHA.CART_DETAILS";
        $resultdeld = oci_parse($conn,$deld);
        oci_execute($resultdeld);

        
}
?>
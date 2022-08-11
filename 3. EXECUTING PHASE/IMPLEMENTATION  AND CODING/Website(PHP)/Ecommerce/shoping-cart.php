<!DOCTYPE html>
<html lang="en">
<?php
include ("partials/head.php");
?>
<?php
include ("partials/session.php");
?>

<body class="animsition">

	<?php
include ("partials/header.php");
?>

	<!-- Shoping Cart -->
	<div class="bg0 p-t-75">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">


						<table class="table">
							<thead>
								<tr>
									<th scope="col">NAME</th>
									<th scope="col">Price</th>
									<th scope="col" class="text-center">Quantity</th>
									<th scope="col">Total</th>
									<th scope="col">Update</th>
									<th scope="col">Remove</th>


								</tr>

								<?php
$sql = "SELECT * FROM AMANSHRESTHA.DISCOUNT";
$result = oci_parse($conn, $sql);

oci_execute($result);
$fetch = oci_fetch_assoc($result);
$discount = 0;
$discount = $fetch['DISCOUNT'];
$total = (float)0;
$tax = .13;
$taxamount = (float)0;
$discountamount =(float)0;

if (isset($_SESSION['cart']))
{

    foreach ($_SESSION['cart'] as $key => $value)
    {

        $total = $total + (float)$value['item_price'] * (float)$value['quantity'];
        $taxamount = $total * $tax;
        $discountamount = $total * $discount;
        $t = (float)$value['item_price'] * (float)$value['quantity'];

?>
							</thead>
							<tbody>
								<tr>
									<td><?php echo $value['item-name'] ?></td>
									<td><?php echo "$" . $value['item_price'] ?></td>
									<td>
										<form action="cartupdate.php?<?php echo "product_id=$value[item_id]"?>"
											method="POST">
											<div class="wrap-num-product flex-w m-auto">
												<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
													<i class="fs-16 zmdi zmdi-minus"></i>
												</div>

												<input name="quantity" class="mtext-104 cl3 txt-center num-product"
													type="number" name="num-product1"
													value="<?php echo $value['quantity'] ?>">

												<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
													<i class="fs-16 zmdi zmdi-plus"></i>
												</div>
											</div>
									</td>
									<td><?php echo "$" . $t ?></td>
									<td><button class="btn btn-sm btn-outline-info" name="update">Update</button>
										<input type="hidden" name="item-name" value="<?php echo $value['item-name'] ?>">
									</td>
									<td>
										</form>
										<form action="cartremove.php?<?php echo "product_id=$value[item_id]"?>"
											method="POST">
											<button class="btn btn-sm btn-outline-danger" name="remove">Remove</button>
											<input type="hidden" name="item-name"
												value="<?php echo $value['item-name'] ?>">
										</form>
									</td>

								</tr>


								<?php
    }
}
?>
							</tbody>
						</table>

						<form action="cartremoveall.php" method="POST">
							<button class="btn btn-sm btn-outline-danger" name="removeall">Remove All</button>
							<input type="hidden" name="item-name" value="<?php echo $value['item-name'] ?>">
						</form>



					</div>
				</div>

				<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">

					<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
						<h4 class="mtext-109 cl2 p-b-30">
							Cart Totals
						</h4>

						<div class="flex-w flex-t bor12 p-b-13">
							<div class="size-208">
								<span class="stext-110 cl2">
									Subtotal:
								</span>
							</div>

							<div class="size-209">
								<span class="mtext-110 cl2">

									<?php

echo "$" . $total ?>
								</span>
							</div>
						</div>
						<?php
if ($total > 0)
{
    $discountamount = $discount / 100;
}
?>

						<div class="flex-w flex-t bor12 p-b-13">
							<div class="size-208">
								<span class="stext-110 cl2">
									TAX
								</span>
							</div>

							<div class="size-209">
								<span class="mtext-110 cl2">
									<?php echo "13%" ?>
								</span>
							</div>
						</div>
						<div class="flex-w flex-t bor12 p-b-13">
							<div class="size-208">
								<span class="stext-110 cl2">
									DISCOUNT
								</span>
							</div>

							<div class="size-209">
								<span class="mtext-110 cl2">
									<?php echo $discount . "%" ?>
								</span>
							</div>
						</div>

						<div class="flex-w flex-t p-t-27 p-b-33">
							<div class="size-208">
								<span class="mtext-101 cl2">
									Total:
								</span>
							</div>

							<div class="size-209 p-t-1">
								<span class="mtext-110 cl2 paytotal">

									<?php
$total = $taxamount + $total - $discountamount;
echo "$ " . $total ;
$_SESSION['total'] = $total;

?>

								</span>
							</div>

						</div>

						<?php
include ('collectionslot.php');
?>



					</div>
					<div id="paypal-payment-button" class="m-t-25">

					</div>







				</div>
			</div>
		</div>
	</div>


	<script
		src="https://www.paypal.com/sdk/js?client-id=AX5JSB0A8SI57JgGcnYtatnwvWfPXqL7LObXf1vhKRhGe_Z06XV2jM3aZXtBgqX_TCrKxxK2d3xhOLkH&disable-funding=credit,card">
	</script>
	<script src="paypal.js"></script>
	<?php
include ("partials/footer.php");
?>
</body>

</html>
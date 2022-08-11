<!DOCTYPE html>
<html lang="en">
<?php 
include ("partials/head.php");
?>

<body class="animsition">

	<!-- Header -->
	<?php 
include ("partials/header.php");
?>

	<?php

$shop_id = $_GET['shop_id'];
$sql = "SELECT * FROM AMANSHRESTHA.SHOP WHERE SHOP_ID = $shop_id";

$shopresult = oci_parse($conn, $sql);

oci_execute($shopresult);

$row = oci_fetch_assoc($shopresult);

?>
	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92"
		style="background-image: url(https://images.pexels.com/photos/1843717/pexels-photo-1843717.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500);">
		<h2 class="ltext-105 cl0 txt-center text-dark">
			WELCOME TO <?php echo strtoupper($row['SHOP_NAME'])?>'S SHOP
		</h2>
	</section>

	<!-- Product -->
	<section class="bg0 p-t-23 p-b-140 p-t-50">
		<div class="container">
			<div class="p-b-10">
				<h3 class="ltext-103 cl5 text-center">
					Product Overview
				</h3>
			</div>

			<div class="flex-w flex-sb-m ">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
						All Products
					</button>


				</div>



				<!-- Search product -->




			</div>



			<div class="row isotope-grid">

				<?php 
			$shop_id = $_GET['shop_id'];
include('partials/connection.php');
$product = "SELECT * from AMANSHRESTHA.PRODUCTS WHERE SHOP_ID ='$shop_id'";
$result = oci_parse($conn, $product);
oci_execute($result);







while($final= oci_fetch_assoc($result))
{


?>


				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item <?php echo $final['SHOP_ID']?>">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic rounded hov-img0">
							<img src="<?php echo $final['PRODUCT_PICTURE']?>" alt="IMG-PRODUCT">
							<a href="product-detail.php?details_id=<?php echo $final['PRODUCT_ID']?>"
								class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
								Quick View
							</a>
						</div>
						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									<?php echo $final['PRODUCT_NAME']?>
								</a>
								<span class="stext-105 cl3">
									<?php
                                    if(empty($final['DISCOUNT']))
                                    {
                                     echo "$".$final['PRODUCT_PRICE'];
                                    }
                                    else {
                                        ?><del>
										<?php echo "$".$final['PRODUCT_PRICE'];
                                         ?>
									</del>
									<?php
                                    $proprice = $final['PRODUCT_PRICE'];
                                    $discount = $final['DISCOUNT'];
                                    $discountamount = ($discount/100) * $proprice;
                                    $finalprice = $proprice - $discountamount;
                                    echo "$".$finalprice;
                                    }
                                    ?>
								</span>
							</div>
						</div>
					</div>
				</div>
				<?php 
}

?>

			</div>
			<h2 class="ltext-105 cl0 txt-center text-dark">
				ABOUT <?php echo strtoupper($row['SHOP_NAME'])?>'S SHOP
			</h2>
			<div class="row">
				<div class="col-sm-2"></div>
				<div class="col-sm-8">
					<p class="p-t-25">
						Over the course of two decades, <?php echo strtoupper($row['SHOP_NAME'])?> built a highly
						reputable name
						in
						the ecommerce market.
						Today, our mix of consumer and business solutions has earned us a place as one of the most
						dynamic
						platforms
						in United Kingdom—and we’re just getting started.Headquartered in the London area,
						<?php echo strtoupper($row['SHOP_NAME'])?> is poised
						for growth with open positions across all functional areas of the company. </p>
				</div>
				<div class="col-sm-2"></div>

			</div>

		</div>
	</section>


	<!-- Footer -->
	<?php 
include ("partials/footer.php");
?>
</body>

</html>
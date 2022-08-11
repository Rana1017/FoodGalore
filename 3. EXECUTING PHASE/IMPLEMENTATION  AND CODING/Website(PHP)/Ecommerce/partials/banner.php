<?php

$shop = "SELECT * FROM AMANSHRESTHA.SHOP";
$result = oci_parse($conn, $shop);
oci_execute($result);

?>

<div class="sec-banner bg0 p-t-80">
	<div class="container">
		<div class="m-b-50 text-center">
			<h3 class="ltext-103 cl5">
				SHOPS
			</h3>
		</div>
		<div class="row">
			<?php
while($final= oci_fetch_assoc($result))
{

?>



			<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
				<!-- Block1 -->
				<div class="block1 wrap-pic-w">
					<img src="<?php echo $final['SHOP_IMAGE']?>" alt="IMG-BANNER">

					<a href="tradershop.php?shop_id=<?php echo $final['SHOP_ID']?>"
						class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
						<div class="block1-txt-child1 flex-col-l">
							<span class="block1-name ltext-102 trans-04 p-b-8">
								<?php echo $final['SHOP_NAME']?>
							</span>

							<span class="block1-info stext-102 trans-04">
								Hot Sale
							</span>
						</div>

						<div class="block1-txt-child2 p-b-4 trans-05">
							<div class="block1-link stext-101 cl0 trans-09">
								Shop Now
							</div>
						</div>
					</a>
				</div>
			</div>
			<?php 
}

?>

		</div>
	</div>
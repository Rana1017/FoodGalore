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

	<!-- Slider -->

	<?php 
include ("partials/slider.php");
?>

	<!-- Banner -->


	<?php 
include ("partials/banner.php");
?>

	<!-- Product -->
	<section class="bg0 p-t-23 p-b-140">
		<div class="container">
			<div class="p-b-10">
				<h3 class="ltext-103 cl5">
					Product Overview
				</h3>
			</div>

			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
						All Products
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".124">
						Bakery
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".121">
						Butcher
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".123">
						Delicatessen
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".125">
						Fishmonger
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".122">
						Greengrocer
					</button>
				</div>

				<div class="flex-w flex-c-m m-tb-10">
					<div
						class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
						<i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
						<i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						Filter
					</div>

					<div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
						<i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
						<i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						Search
					</div>
				</div>

				<!-- Search product -->
				
				<div class="dis-none panel-search w-full p-t-10 p-b-15">
					<div class="bor8">

						<form method="POST">
							<div class="row">

								<div class="col-sm-10"><input type="textbox" name="productquery" class="w-full h-full"></div>
								<div class="col-sm-2"><input type="submit" name="search" value="Search"
										class="btn btn-primary float-right btn-lg btn-block"></div>

							</div>


						</form>
					</div>
				</div>

				<!-- Filter -->
				<div class="dis-none panel-filter w-full p-t-10">
					<div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
						<div class="filter-col1 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Sort By
							</div>

							<ul>
								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Default
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Popularity
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Average rating
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04 filter-link-active">
										Newness
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Price: Low to High
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Price: High to Low
									</a>
								</li>
							</ul>
						</div>


					</div>
				</div>
			</div>

			<div class="row isotope-grid">

				<?php 



$usersearch = false;
if(isset($_POST['search']))
{
$usersearch = true;
	
$search = $_POST['productquery'];

$product= "SELECT * FROM AMANSHRESTHA.PRODUCTS WHERE PRODUCT_NAME LIKE '%$search%' OR
		PRODUCT_PRICE LIKE '%$search%' ";

$result = oci_parse($conn, $product);

oci_execute($result);



if ($result)
{
	


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
									<?php echo "$".$final['PRODUCT_PRICE']?>
								</span>
							</div>


						</div>
					</div>
				</div>
				<?php 
}
}
}
?>

			</div>


			<div class="row isotope-grid">

				<?php 
				if(!$usersearch)
				{
					
				
include('partials/connection.php');
$product = "SELECT * from AMANSHRESTHA.PRODUCTS";
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
									<?php echo "$".$final['PRODUCT_PRICE']?>
								</span>
							</div>


						</div>
					</div>
				</div>
				<?php 
}
}
?>

			</div>

			<!-- Load more -->
			<div class="flex-c-m flex-w w-full p-t-45">
				<a href="product.php" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
					Load More
				</a>
			</div>
		</div>
	</section>


	<!-- Footer -->
	<?php 
include ("partials/footer.php");
?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
	integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
	integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
	integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<?php 
include ("partials/head.php");
session_start();
?>

<body class="animsition">
	<!-- Header -->
	<?php 
include ("partials/header.php");
?>
	<!-- Product Detail -->
	<section class="sec-product-detail bg0 p-t-65 p-b-60 m-t-50">
		<div class="container">
			<div class="row">
				<?php
			include('partials/connection.php');
			$id = $_GET['details_id'];
			$product = "SELECT * from AMANSHRESTHA.products where PRODUCT_ID ='$id'";
			$result = oci_parse($conn, $product);
			oci_execute($result);
			$final=oci_fetch_assoc($result);
			$productname = $final['PRODUCT_NAME'];
			$firstCharacter = $productname[0];
			$stringlenght = strlen($productname);
			$lastCharacter = $productname[$stringlenght-1];
			?>
				<div class="col-md-6 col-lg-7 p-b-30">
					<div class="p-l-25 p-r-30 p-lr-0-lg">
						<div class="wrap-slick3 flex-sb flex-w">
							<div class="wrap-slick3-dots"></div>
							<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
							<div class="slick3 gallery-lb">
								<div class="item-slick3" data-thumb="<?php echo $final['PRODUCT_PICTURE']?>">
									<div class="wrap-pic-w pos-relative" style="height:600px">
										<img src="<?php echo $final['PRODUCT_PICTURE']?>" alt="IMG-PRODUCT">
										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04"
											href="<?php echo $final['PRODUCT_PICTURE']?>">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-5 p-b-30">
					<div class="p-r-50 p-t-5 p-lr-0-lg">
						<h4 class="mtext-105 cl2 js-name-detail p-b-14">
							<?php 
							echo $final['PRODUCT_NAME'];
							?>
						</h4>
						<span class="mtext-106 cl2">
							<?php
                                    if(empty($final['DISCOUNT']))
                                    {
										$finalprice = $final['PRODUCT_PRICE'];
                                     echo "$".$finalprice;
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
						<p class="stext-102 cl3 p-t-23">
							<?php echo $final['PRODUCT_DESCRIPTION']?>
						</p>
						<!--  -->
						<div class="p-t-33">
							<div class="flex-w flex-r-m p-b-10">
								<div class="size-204 flex-w flex-m respon6-next">
									<button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04"
										name="addtocart"
										onclick="location.href='carthandler.php?cart_id=<?php echo $final['PRODUCT_ID'] ?> &cart_name=<?php echo $final['PRODUCT_NAME']?>&cart_price=<?php echo $finalprice?>'">
										Add to cart
									</button>
								</div>
							</div>
						</div>
						<!--  -->
						<div class="flex-w flex-m p-l-100 p-t-40 respon7">
							<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100"
								data-tooltip="Facebook">
								<i class="fa fa-facebook"></i>
							</a>
							<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100"
								data-tooltip="Twitter">
								<i class="fa fa-twitter"></i>
							</a>
							<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100"
								data-tooltip="Google Plus">
								<i class="fa fa-google-plus"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="bor10 m-t-50 p-t-43 p-b-40">
				<!-- Tab01 -->
				<div class="tab01">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item p-b-10">
							<a class="nav-link active" data-toggle="tab" href="#description" role="tab">Description</a>
						</li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content p-t-43">
						<!-- - -->
						<div class="tab-pane fade show active" id="description" role="tabpanel">
							<div class="how-pos2 p-lr-15-md">
								<p class="stext-102 cl6">
									<?php echo $final['PRODUCT_DESCRIPTION']?>
								</p>
							</div>
						</div>
						<!-- - -->
					</div>
				</div>
			</div>
			<div class="bor10 m-t-50 p-t-43 p-b-40">
				<!-- Tab01 -->
				<div class="tab01">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item p-b-10">
							<a class="nav-link active" data-toggle="tab" href="#allergy" role="tab">ALLERGY
								INFORMATION</a>
						</li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content p-t-43">
						<!-- - -->
						<div class="tab-pane fade show active" id="allergy" role="tabpanel">
							<div class="how-pos2 p-lr-15-md">
								<p class="stext-102 cl6">
									<?php echo $final['ALLERGY']?>
								</p>
							</div>
						</div>
						<!-- - -->
					</div>
				</div>
			</div>
			<div class="bor10 m-t-50 p-t-43 p-b-40">
				<!-- Tab01 -->
				<div class="tab01">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item p-b-10">
							<a class="nav-link active" data-toggle="tab" href="#description" role="tab">Review</a>
						</li>
					</ul>
					<div class="tab-content p-t-43">
						<!-- - -->
						<div class="row">
							<div class="col-sm-2"></div>
							<div class="col-sm-8">
								<form method="POST" action="review.php?productid=<?php echo $id?>">
									<div class="form-group">
										<label for="exampleFormControlTextarea1">Review</label>
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="5"
											name="review"></textarea>
									</div>
									<select class="custom-select" id="inputGroupSelect01" name="rating">
										<option selected value="0">Rating</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
									<input type="submit" name="reviewsubmit" value="Submit" class="btn btn-primary">
								</form>
							</div>
							<div class="col-sm-2"></div>
						</div>
						<!-- - -->
					</div>
					<!-- Tab panes -->
					<div class="row">
						<div class="col-sm-2"></div>
						<div class="col-sm-8">
							<div class="tab-content p-t-43">
								<?php
								$rating = 0;
						$productid = $final['PRODUCT_ID'];
						include('partials/connection.php');
								$review = "select r.review, u.user_name , r.rating from AMANSHRESTHA.review r
								inner join AMANSHRESTHA.users u on u.user_id = r.user_id
								where r.product_id=$productid";
								$result = oci_parse($conn, $review);
								oci_execute($result);
								while($final= oci_fetch_assoc($result))
								{
								?>
								<div class="card">
									<div class="card-header">
										<?php
										echo $final['USER_NAME'];
										?>
									</div>
									<div class="card-body">
										<blockquote class="blockquote mb-0">
											<div class="row">
												<div class="col-sm-10">
													<p><?php echo $final['REVIEW']?></p>
												</div>
												<div class="col-sm-2">
													<spam class="text-muted mr-auto">
														<?php echo $final['RATING']?> out
														of 5</spam>
												</div>
											</div>
										</blockquote>
									</div>
								</div>
								<br>
								<?php
						}
?>
							</div>
						</div>
						<div class="col-sm-2"></div>
					</div>
				</div>
			</div>
			<div class="p-b-10 text-center m-tb-25">
				<h3 class="ltext-103 cl5">
					Related Product
				</h3>
			</div>
			<div class="row isotope-grid">
				<?php 
            $first = $firstCharacter;
            $last = $lastCharacter;
            $product= "SELECT * FROM AMANSHRESTHA.PRODUCTS WHERE PRODUCT_NAME LIKE '%$first%' OR
            PRODUCT_NAME LIKE '%$last%'";
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
		}
            ?>
			</div>
		</div>
	</section>
	<?php 
include ("partials/footer.php");
?>
</body>

</html>
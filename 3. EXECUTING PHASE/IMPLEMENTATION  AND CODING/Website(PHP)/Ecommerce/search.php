<!DOCTYPE html>
<html lang="en">
<?php 
include ("partials/head.php");
?>
<body class="animsition">
	
	<!-- Header -->
	
	
	<!-- Product -->
	<div class="bg0 m-t-23 p-b-140">
		<div class="container">
			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					
				</div>
			<div class="row isotope-grid">

                    
                    <form  method="POST">
					
						<input type="textbox" name="search" placeholder="Search">
                        <input type="submit" name = "submit" value = "Search" class="btn btn-primary my-3">
						
						</form>

                        <?php
					include ('partials/connection.php');
					if(isset($_POST['submit'])){
						$search= mysqli_real_escape_string($connection, $_POST['search']);
						$sql= "SELECT * FROM products WHERE name LIKE'%$search%' OR
						price LIKE '%$search%' ";
						$result= mysqli_query($connection, $sql);
						if(mysqli_num_rows($result)>0){
							while($row=mysqli_fetch_assoc($result)){
					?>

                    <<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="<?php echo $row['picture']?>" alt="IMG-PRODUCT">

							<a href="product-detail.php?details_id=<?php echo $row['id']?>"
								class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									<?php echo $row['name']?>
								</a>

								<span class="stext-105 cl3">
									<?php echo "$".$row['price']?>
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png"
										alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l"
										src="images/icons/icon-heart-02.png" alt="ICON">
								</a>
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
		</div>
	</div>
		

	<!-- Footer -->
	<?php 
include ("partials/footer.php");
?>
</body>
</html>
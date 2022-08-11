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

    <!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92"
        style="background-image: url(https://images.pexels.com/photos/403575/pexels-photo-403575.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260);">
        <h2 class="ltext-105 cl0 txt-center text-dark">
            GET WHAT YOU EYE
        </h2>
    </section>
    <!-- Product -->
    <section class="bg0 p-t-23 p-b-140 m-t-20">

        <div class="container">
            <div class="p-b-10">
                <h3 class="ltext-103 cl5">
                    Product Overview
                </h3>
            </div>
            <div class="flex-w flex-sb-m ">
                <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
                        All Products
                    </button>

                    <?php
                    $sql = "SELECT * FROM AMANSHRESTHA.SHOP";
                    $result = oci_parse($conn,$sql);
                    oci_execute($result);
                    
                    while($row = oci_fetch_assoc($result))
                    {
                       ?>

                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5"
                        data-filter="<?php echo "." .$row['SHOP_ID']?>">
                        <?php
                         echo $row['SHOP_NAME'];
                        ?>

                    </button>
                    <?php
                    }
                    ?>

                </div>
                <div class="flex-w flex-c-m m-tb-10">
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
                                <div class="col-sm-10"><input type="textbox" name="productquery" class="w-full h-full">
                                </div>
                                <div class="col-sm-2"><input type="submit" name="search" value="Search"
                                        class="btn btn-primary float-right btn-lg btn-block"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php
            $usersort = false;
            $usersearch = false;
            ?>
            <form action="products.php" method="POST">
                <div class="text-center">
                    <label for="f-option" class="l-radio">
                        <input type="radio" id="f-option" name="sort" value="name" tabindex="1"
                            <?php if (isset($_POST['sort'])) { if ($_POST['sort'] == 'name') echo 'checked'; } ?>>
                        <span>Name</span>
                    </label>
                    <label for="k-option" class="l-radio">
                        <input type="radio" id="k-option" name="sort" value="pricehigh" tabindex="3"
                            <?php if (isset($_POST['sort'])) { if ($_POST['sort'] == 'pricehigh') echo 'checked'; } ?>>
                        <span>Price(High to Low)</span>
                    </label>
                    <label for="s-option" class="l-radio">
                        <input type="radio" id="s-option" name="sort" value="pricelow" tabindex="2"
                            <?php if (isset($_POST['sort'])) { if ($_POST['sort'] == 'pricelow') echo 'checked'; } ?>>
                        <span>Price(Low to High)</span>
                    </label>

                    <label for="t-option" class="l-radio">
                        <input type="radio" id="t-option" name="sort" value="shop" tabindex="4"
                            <?php if (isset($_POST['sort'])) { if ($_POST['sort'] == 'shop') echo 'checked'; } ?>>
                        <span>Popularity</span>
                    </label>
                    <br>
                    <input type="submit" name="submit" value="Sort" class="btn btn-primary mb-3">
            </form>

            <div class="row isotope-grid">
                <?php 
            if(isset($_POST['search']))
            {
                
            $usersearch = true;
            
            $search =  strtolower($_POST['productquery']);
            $search = ucfirst($search);
            
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
            }
            
            ?>
            </div>
            <div class="row isotope-grid">
                <?php 
            if(!$usersearch)
            {
            
            $query = "SELECT * FROM AMANSHRESTHA.PRODUCTS";
            if (isset($_POST['sort']))
            {
            $usersort = true;
            if ($_POST['sort'] == 'name')
            {
            $query .= ' ORDER BY PRODUCT_NAME';
            }
            else if ($_POST['sort'] == 'pricelow')
            {
            $query .= ' ORDER BY PRODUCT_PRICE';
            }
            else if ($_POST['sort'] == 'pricehigh')
            {
            $query .= ' ORDER BY PRODUCT_PRICE DESC';
            }
            else
            {
            $query .= ' ORDER BY PRODUCT_STOCK';
            }
            }
            $result = oci_parse($conn, $query);
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
              }
            ?>
            </div>

        </div>
    </section>

    <!-- Footer -->
    <?php 
include ("partials/footer.php");
?>
</body>

</html>
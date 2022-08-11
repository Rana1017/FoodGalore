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
            FAQ
        </h2>
    </section>


    <!-- Content page -->
    <section class="bg0 p-t-40 p-b-120">
        <div class="container">
            <h3 class="mtext-111 cl2 text-center m-b-30">
                Frequently Asked Question
            </h3>
            <div id="accordion">
                <div class="card">
                    <button class="btn" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                        aria-controls="collapseOne">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                Can I cancel my order after payment?


                            </h5>
                        </div>
                    </button>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            Sorry, but you can't cancel the order after the
                            payment is already done. As the products we sell are meant to be fresh and could easily
                            be rotten after some days, we are relecutant to get the product back. But what we can
                            assure you is that the product we sell is 100% authentic and of high quality. Trust
                            yourself and buy them without any hesitations.

                        </div>
                    </div>
                </div>
                <div class="card">
                    <button class="btn collapsed" data-toggle="collapse" data-target="#collapseTwo"
                        aria-expanded="false" aria-controls="collapseTwo">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">

                                How to reset my password?
                            </h5>
                        </div>
                    </button>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            You can navigate to profile page and you will find forget password section.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <button class="btn collapsed" data-toggle="collapse" data-target="#collapseThree"
                        aria-expanded="false" aria-controls="collapseThree">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">

                                What is so special about Food Galore?

                            </h5>
                        </div>
                    </button>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            Food Galore is an online ecoomerce site which is meant
                            to serve you, get the best possible foods and dishes to you , and on doing so save your
                            precious time. We are known for selling the highest quality foods at an affordable price.
                            In which county can I use Food Galore? You can use Food Galore only ain leckhadersfaux part
                            of UK at the moment.
                            only in Cleckhdersfax*
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Footer -->
    <?php 
include ("partials/footer.php");
?>
</body>

</html>
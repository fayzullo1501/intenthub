
<?php include "header.php"; ?>
        <!-- ***** Breadcrumb Area Start ***** -->
        <section class="section breadcrumb-area overlay-dark d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Breamcrumb Content -->
                        <div class="breadcrumb-content d-flex flex-column align-items-center text-center">
                            <h2 style="color:#fff" class=" text-uppercase mb-3">Biz Haqimizda</h2>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a class="text-uppercase text-white" href="index.html">Asosiy</a></li>

                                <li class="breadcrumb-item text-white active">Biz Haqimizda</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Breadcrumb Area End ***** -->

        <!-- ***** About Area Start ***** -->
        <section class="section about-area ptb_100">
            <div class="container">
                <div class="row1 justify-content-between align-items-center">
                    <div class="col-12 col-lg-6">
                        <!-- About Thumb -->
                        <div class="about-thumb text-center">
                            <img src="assets/img/about/about_img.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <!-- About Content -->
                        <div class="about-content section-heading text-center text-lg-left pl-md-4 mt-5 mt-lg-0 mb-0">
                            <h2 class="mb-3"><?php print $about_title?></h2>
                            <p><?php print $about_text;?></p>
                            <!-- Counter Area -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** About Area End ***** -->


        <!-- ***** Our Goal Area End ***** -->

        <!-- ***** Team Area Start ***** -->

        <!-- ***** Team Area End ***** -->

         <!--====== Call To Action Area Start ======-->
        <section class="section cta-area  ptb_100">
            <div class="container">
                <div class="row1 justify-content-center">
                    <div class="col-12 col-lg-10">
                        <!-- Section Heading -->
                        <div class="section-heading text-center m-0">
                            <h2 style="color:#29303b"><?php print $enquiry_title; ?></h2>
                            <p style="color:#29303b" class=" d-none d-sm-block mt-4"><?php print $enquiry_text; ?></p>
                            <div class="row1 justify-content-center">
                    <a href="https://t.me/intenthub" class="btn btn-bordered mt-4">Qoʻshimcha</a>
                </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== Call To Action Area End ======-->
<?php include "footer.php"; ?>

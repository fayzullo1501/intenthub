 <?php include "header.php";?>
        <section class="section breadcrumb-area overlay-dark d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Breamcrumb Content -->
                        <div class="breadcrumb-content text-center">
                            <h2 class="text-white text-uppercase mb-3">Blog & Yangiliklar</h2>
                            <ol class="breadcrumb d-flex justify-content-center">
                                <li class="breadcrumb-item"><a class="text-uppercase text-white" href="index.html">Asosiy</a></li>

                                <li class="breadcrumb-item text-white active">Blog</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Breadcrumb Area End ***** -->

        <!-- ***** Service Area End ***** -->
         <!-- ***** Service Area End ***** -->
         <section id="service" class="section service-area ptb_150">
            <!-- Shape Top -->
            <div class="shape shape-top">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" fill="#FFFFFF">
                    <path class="shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
                c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
                c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
                </svg>
            </div>
            <div class="container">
                <div class="row1 justify-content-center">
                    <div class="col-12 col-md-10 col-lg-7">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2><?php print $service_title?></h2>
                            <p class="d-none d-sm-block mt-4"><?php print $service_text?></p>
                        </div>
                    </div>
                </div>
                <div class="row1">

                <?php
				   $qs="SELECT * FROM  service ORDER BY id DESC";


 $r1 = mysqli_query($con,$qs);

while($rod = mysqli_fetch_array($r1))
{
	$id="$rod[id]";
	$serviceg="$rod[service_title]";
	$service_desc="$rod[service_desc]";

print "
<div class='col-12 col-md-6 col-lg-4'>
<!-- Single Service -->
<div class='single-service p-4'  style='border: solid 1px #788282;'>
    <h3 class='my-3'>$serviceg</h3>
    <p>$service_desc</p>
    <a class='service-btn mt-3' href='servicedetail.php?id=$id'>Learn More</a>
</div>
</div>

";
}
?>
                   </div>
            </div>
            <!-- Shape Bottom -->
            <div class="shape shape-bottom">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" fill="#FFFFFF">
                    <path class="shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
        c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
        c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
                </svg>
            </div>
        </section>
        <!-- ***** Service Area End ***** -->

        <!-- ***** Service Area End ***** -->


        <!-- ***** Review Area Start ***** -->
        <section id="review" class="section review-area bg-overlay ptb_100">
            <div class="container">
                <div class="row1 justify-content-center">
                    <div class="col-12 col-md-10 col-lg-7">
                        <!-- Section Heading -->


                        <div class="section-heading text-center">
                            <h2 class="text-white"><?php print $test_title; ?></h2>
                            <p class="text-white d-none d-sm-block mt-4"><?php print $test_text;?></p>
                        </div>
                    </div>
                </div>
                <div class="row1">
                    <!-- Client Reviews -->
                    <div class="client-reviews owl-carousel">
                        <!-- Single Review -->



                        <?php
				   $q="SELECT * FROM  testimony ORDER BY id DESC LIMIT 6";


 $r123 = mysqli_query($con,$q);

while($ro = mysqli_fetch_array($r123))
{

	$name="$ro[name]";
	$position="$ro[position]";
    $message="$ro[message]";
    $ufile="$ro[ufile]";

print "

<div class='single-review p-5'>
<!-- Review Content -->
<div class='review-content'>
    <!-- Review Text -->
    <div class='review-text'>
        <p>$message</p>
    </div>
    <!-- Quotation Icon -->

</div>
<!-- Reviewer -->
<div class='reviewer media mt-3'>
    <!-- Reviewer Thumb -->
    <div class='reviewer-thumb'>
        <img class='avatar-lg radius-100' src='dashboard/uploads/testimony/$ufile' alt='img'>
    </div>
    <!-- Reviewer Media -->
    <div class='reviewer-meta media-body align-self-center ml-4'>
        <h5 class='reviewer-name color-primary mb-2'>$name</h5>
        <h6 class='text-secondary fw-6'>$position</h6>
    </div>
</div>
</div>


";
}
?>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Review Area End ***** -->

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

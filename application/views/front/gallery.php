<?php 
$myurl='gallery';
include('header.php')
?>

<!-- about -->

<section id="about">
    <div class="container">
        <div class="row">
            <div class="about-co">
                <h2>Gallery</h2>
            </div>
            <div class="content">
                <h3>Foundations of Architronix</h3>
                <h6>Crafting Architectural Designing and Masterpieces Interior Wonders</h6>
            </div>
        </div>
    </div>
</section>

<!--gallery  -->

<section id="gallery">
    <div class="container">
        <!-- <div class="owl-carousel owl-theme owl-loaded gallery-slider" data-aos="fade-up" data-aos-delay="200">
            <div class="owl-stage-outer"> -->
                <div class="row" id="image-gallery">
                    <?php foreach($gallery as $galler){  ?>
                    <div class="col-md-4 image">
                        <div class="img-wrapper wow zoomIn">
                            <a href="<?=base_url("assets/front/images/".$galler['image']);?>"><img
                                    src="<?=base_url("assets/front/images/".$galler['image']);?>" class="img-responsive"></a>
                            <div class="img-overlay">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                        <?php } ?>
                    
                    <!-- <div class="col-md-4 image">
                        <div class="img-wrapper wow zoomIn">
                            <a href="<?=base_url("assets/front/images/shubh/video-image.jpg");?>"><img
                                    src="<?=base_url("assets/front/images/shubh/video-image.jpg");?>" class="img-responsive"></a>
                            <div class="img-overlay">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div> -->

                </div>
            <!-- </div>
        </div> -->

    </div>
</section>

<!-- footer -->

<?php include('footer.php'); ?>
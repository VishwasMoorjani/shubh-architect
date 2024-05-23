<?php
$myurl = 'home';
include('header.php')
?>

<!-- slider -->

<section id="sliderr">
    <!-- <div class="container"> -->
    <div class="owl-carousel owl-theme owl-loaded banner-slider">
        <div class="owl-stage-outer">
            <div class="owl-stage">
                <?php foreach ($sliders as $slider) { ?>
                    <div class="owl-item">
                        <div class="row g-0">
                            <div class="col-md-6 imgs">
                                <div class="imgss">
                                    <h2 data-aos="fade-up" data-aos-delay="200"><?= $slider['title1'] ?></h2>
                                    <div class="btn" data-aos="fade-up" data-aos-delay="400">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn-1">Enquiry Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="imgsc">
                                    <img src="<?= base_url("assets/front/images/" . $slider['image']); ?>" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                <?php } ?>
                <!-- <div class="owl-item">
                    <div class="row g-0">

                        <div class="col-md-6 imgs">
                            <div class="imgss">
                                <h2>Shaping Interior Excellence</h2>
                                <div class="btn">
                                    <a href="#" class="btn-1">Enquiry Now</a>&nbsp; &nbsp; <a href="#"
                                        class="btn-1">Enquiry Now</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="imgsc">
                                <img src="<?= base_url("assets/front/images/shubh/about.jpg"); ?>" alt="">
                            </div>
                        </div>

                    </div>
                </div> -->

            </div>
        </div>
    </div>
    <!-- </div> -->
</section>

<!-- about-banner -->

<section id="about-banner">
    <!-- <div class="container-fluid"> -->
    <div class="row g-0">

        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <a href="<?=$banner_1_link?>" class="imgs">
                <img src="<?= base_url("assets/front/images/" . $banner1); ?>" alt="">
                <h3><?= $banner_1_title ?></h3>
            </a>
        </div>

        <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
            <a href="<?=$banner_2_link?>" class="imgs">
                <img src="<?= base_url("assets/front/images/" . $banner2); ?>" alt="">
                <h3><?= $banner_2_title ?></h3>
            </a>
        </div>

        <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
            <a href="<?=$banner_3_link?>" class="imgs">
                <img src="<?= base_url("assets/front/images/" . $banner3); ?>" alt="">
                <h3><?= $banner_3_title ?></h3>
            </a>
        </div>

    </div>
    <!-- </div> -->
</section>

<!-- about -->

<section id="about">
    <div class="container">
        <div class="row">
            <div class="about-co">
                <h2>Why Choose Us</h2>
            </div>
            <div class="content">
                <h3><?= $whychoose['heading'] ?></h3>
                <h6><?= $whychoose['subheading'] ?></h6>
            </div>
        </div>
    </div>
</section>

<!-- why-chouse -->

<section id="why-chouse">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-6 col-md-12">
                <div class="imgs">
                    <img src="<?= base_url("assets/front/images/" . $whychoose['image']); ?>" alt="">
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="content">
                    <ul class="text-infoo d-flex list-unstyled gap-4">
                        <li>
                            <h5>01</h5>
                        </li>

                        <li>
                            <h3><?=$whychoose['ques1']?></h3>
                            <p class="text"><?=$whychoose['answer1']?></p>
                        </li>

                    </ul>

                    <ul class="text-infoo d-flex list-unstyled gap-4">
                        <li>
                            <h5>02</h5>
                        </li>

                        <li>
                            <h3><?=$whychoose['ques2']?></h3>
                            <p class="text"><?=$whychoose['answer2']?></p>
                        </li>

                    </ul>

                    <ul class="text-infoo d-flex list-unstyled gap-4">
                        <li>
                            <h5>03</h5>
                        </li>

                        <li>
                            <h3><?=$whychoose['ques3']?></h3>
                            <p class="text"><?=$whychoose['answer3']?></p>
                        </li>

                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- counter -->

<div id="counter">
    <div class="container">
        <div class="row">

            <div class="col-md-3 col-6">
                <div class="item">
                    <h2><span class="count" data-number="<?= $experience ?>"></span></h2>
                    <h3 class="text">Year Of Experience</h3>
                </div>
            </div>

            <div class="col-md-3 col-6">
                <div class="item">
                    <h2><span class="count" data-number="<?= $patient ?>"></span>+</h2>
                    <h3 class="text">Satisfied Client</h3>
                </div>
            </div>

            <div class="col-md-3 col-6">
                <div class="item">
                    <h2><span class="count" data-number="<?= $accuracy ?>"></span>K</h2>
                    <h3 class="text">Completed Projects</h3>
                </div>
            </div>

            <div class="col-md-3 col-6">
                <div class="item">
                    <h2><span class="count" data-number="<?= $doctor ?>"></span>%</h2>
                    <h3 class="text">Current Clients</h3>
                </div>
            </div>

        </div>
    </div>
</div>

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
        <div class="owl-carousel owl-theme owl-loaded gallery-slider" data-aos="fade-up" data-aos-delay="200">
            <div class="owl-stage-outer">
                <div class="owl-stage" id="image-gallery">
                    <?php foreach ($gallery as $gallerys) { ?>
                        <div class="owl-item image">
                            <div class="img-wrapper wow zoomIn">
                                <a href="<?= base_url("assets/front/images/" . $gallerys['image']); ?>"><img src="<?= base_url("assets/front/images/" . $gallerys['image']); ?>" class="img-responsive"></a>
                                <div class="img-overlay">
                                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- about -->

<section id="about">
    <div class="container">
        <div class="row">
            <div class="about-co">
                <h2>Services</h2>
            </div>
            <div class="content">
                <h3>Foundations of Architronix</h3>
                <h6>Crafting Architectural Designing and Masterpieces Interior Wonders</h6>
            </div>
        </div>
    </div>
</section>

<!-- services -->

<section id="services">
    <div class="container-fluid">
        <div class="row">
            <?php foreach ($services as $service) { ?>
                <div class="col-lg-3 col-md-6">
                    <div class="iner">
                        <div class="imgs">
                            <img src="<?= base_url("assets/front/images/" . $service['image']); ?>" alt="">
                        </div>
                        <div class="content">
                            <h4><a href="<?= base_url('service/' . $service['link']) ?>">Res<?= $service['name'] ?></a></h4>
                            <p class="text"><?php $this->load->helper('text');
                                            echo word_limiter($service['content'], 20) ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <!-- <div class="col-lg-3 col-md-6">
                <div class="iner">
                    <div class="imgs">
                        <img src="<?= base_url("assets/front/images/shubh/project-managemenr.jpg"); ?>" alt="">
                    </div>
                    <div class="content">
                        <h4><a href="product.php">Residential Design</a></h4>
                        <p class="text">Our residential design services cover everything from concept to completion</p>
                    </div>
                </div>
            </div> -->

        </div>
    </div>
</section>

<!-- about -->

<section id="about">
    <div class="container">
        <div class="row">
            <div class="about-co">
                <h2>Testimonial</h2>
            </div>
            <div class="content">
                <h3>Foundations of Architronix</h3>
                <h6>Crafting Architectural Designing and Masterpieces Interior Wonders</h6>
            </div>
        </div>
    </div>
</section>


<!-- testimonaiol-bg -->

<section id="testimonaiol-bg">
    <div class="container-fluid">
        <div class="owl-carousel owl-theme owl-loaded testimonaiol">
            <div class="owl-stage-outer">
                <div class="owl-stage">
                    <?php foreach ($reviews as $review) { ?>
                        <div class="owl-item">
                            <div class="iner">
                                <ul class="quote d-flex list-unstyled gap-4">
                                    <li>
                                        <div class="quote-icon"><i class="fa-solid fa-quote-left"></i></div>
                                    </li>
                                    <li>
                                        <div class="content">
                                            <p class="text"><?= $review['message']; ?></p>
                                        </div>
                                        <div class="content-1">
                                            <h4><?= $review['name']; ?></h4>
                                            <!-- <h5>Modern Spaces Inc</h5> -->
                                    </li>
                                </ul>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- blog -->

<section id="about">
    <div class="container">
        <div class="row">
            <div class="about-co">
                <h2>Blog</h2>
            </div>
            <div class="content">
                <h3>Foundations of Architronix</h3>
                <h6>Crafting Architectural Designing and Masterpieces Interior Wonders</h6>
            </div>
        </div>
    </div>
</section>

<!-- blog -->

<section id="blog">
    <div class="container">

        <div class="owl-carousel owl-theme owl-loaded blog">
            <div class="owl-stage-outer">
                <div class="owl-stage">
                    <?php foreach ($blogs as $blog) { ?>
                        <div class="owl-item">
                            <div class="iner" data-aos="fade-up" data-aos-delay="400">
                                <div class="imgs">
                                    <img src="<?= base_url("assets/front/images/" . $blog['image']); ?>" alt="">
                                    <div class="news_img_overlay"></div>
                                </div>

                                <div class="content">
                                    <h5><?php $date = date_create($blog['date_added']);
                                        echo date_format($date, "d F Y") ?></h5>
                                    <h3><a href="<?= base_url('blog/' . $blog['link']) ?>"><?= $blog['post_title']; ?></a></h3>
                                </div>
                            </div>
                        </div>
                    <?php  } ?>

                    <!-- <div class="owl-item">
                        <div class="iner" data-aos="fade-up" data-aos-delay="400">
                            <div class="imgs">
                                <img src="<?= base_url("assets/front/images/shubh/blog-image-2.jpg"); ?>" alt="">
                                <div class="news_img_overlay"></div>
                            </div>

                            <div class="content">
                                <h5>14 December '23 / Interior</h5>
                                <h3><a href="blog.php">The Art of Harmonious Color Schemes in Interior Design</a></h3>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>

    </div>
</section>

<!-- drop -->

<section id="drop">
    <div class="container">
        <div class="imgs">
            <ul class="d-flex list-unstyled justify-content-between">
                <li>
                    <h2>Drop Us a Line</h2>
                </li>
                <li>
                    <h6><a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Enquiry Now</a></h6>
                </li>
            </ul>

        </div>
    </div>
</section>

<!-- footer -->

<?php include('footer.php'); ?>
<?php
$myurl = 'blog';
include('header.php')
?>

<!-- about -->

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

        <!-- <div class="owl-carousel owl-theme owl-loaded blog">
            <div class="owl-stage-outer"> -->
        <div class="row">

            <?php foreach ($posts as $post) { ?>
                <div class="col-md-4">
                    <div class="iner" data-aos="fade-up" data-aos-delay="200">
                        <div class="imgs">
                            <img src="<?= base_url("assets/front/images/" . $post['image']); ?>" alt="">
                            <div class="news_img_overlay"></div>
                        </div>

                        <div class="content">
                            <h5><?php $date = date_create($post['date_added']);
                                echo date_format($date, "d F Y"); ?></h5>
                            <h3><a href="<?=base_url('blog/'.$post['link'])?>"><?= $post['post_title'] ?></a></h3>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <!-- <div class="col-md-4">
                        <div class="iner" data-aos="fade-up" data-aos-delay="400">
                            <div class="imgs">
                                <img src="<?= base_url("assets/front/images/shubh/blog-image-2.jpg"); ?>" alt="">
                                <div class="news_img_overlay"></div>
                            </div>

                            <div class="content">
                                <h5>14 December '23 / Interior</h5>
                                <h3><a href="blog-det.php">The Art of Harmonious Color Schemes in Interior Design</a></h3>
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
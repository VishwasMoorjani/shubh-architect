<?php 
$myurl='blog';
include('header.php')
?>

<!-- about -->

<section id="about">
    <div class="container">
        <div class="row">
            <div class="about-co">
                <h2>Blog Details</h2>
            </div>
            <div class="content">
                <h3>Foundations of Architronix</h3>
                <h6>Crafting Architectural Designing and Masterpieces Interior Wonders</h6>
            </div>
        </div>
    </div>
</section>

<!-- blog -->

<section id="blog-det">
    <div class="container">

        <!-- <div class="owl-carousel owl-theme owl-loaded blog">
            <div class="owl-stage-outer"> -->
        <div class="row">

            <div class="col-md-8">
                <div class="iner" data-aos="fade-up" data-aos-delay="400">
                    <div class="imgs">
                        <img src="<?=base_url("assets/front/images/".$blog['image']);?>" alt="">
                        <div class="news_img_overlay"></div>
                    </div>

                    <div class="content">
                        <h5><i class="fa-solid fa-user"></i> BY <?=strtoupper($blog['blogger_name']); ?> &nbsp; &nbsp; <i
                                class="fa-solid fa-calendar-days"></i> <?php $date=date_create($blog['date_added']); echo date_format($date, "d F Y") ?></h5>
                        <h3><a href="javascript:void(0)"><?=$blog['post_title']; ?></a></h3>
                        <?=$blog['post']; ?>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="content-1">
                    <h4>Recent Post</h4>
                    <?php foreach($related as $relate){ ?>
                    <ul class="img-info d-flex list-unstyled gap-3">
                        <li>
                            <div class="imgs">
                                <img src="<?=base_url("assets/front/images/".$relate['image']);?>" alt="">
                            </div>
                        </li>
                        <li>
                            <p class="text-1"><a href="<?=base_url('blog/'.$relate['link'])?>"><?=$relate['post_title']?></a></p>
                            <h6><i class="fa-solid fa-user"></i><?php $date=date_create($relate['date_added']); echo date_format($date, "d F"); ?></h6>
                        </li>
                    </ul>
                    <?php } ?>
                    <!-- <ul class="img-info d-flex list-unstyled gap-3">
                        <li>
                            <div class="imgs">
                                <img src="<?=base_url("assets/front/images/imgrencen3.jpg");?>" alt="">
                            </div>
                        </li>
                        <li>
                            <p class="text-1"><a href="javascript:void(0);">Integer at faucibus urna. Nullam
                                    condimentum</a></p>
                            <h6><i class="fa-solid fa-user"></i> 15 October</h6>
                        </li>
                    </ul> -->

                </div>
            </div>

        </div>
        <!-- </div>
        </div> -->

    </div>
</section>

<!-- footer -->

<?php include('footer.php'); ?>
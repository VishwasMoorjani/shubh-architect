<?php 
$myurl='product';
include('header.php')
?>

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
            <?php foreach($services as $service){ ?>
            <div class="col-lg-3 col-md-6">
                <div class="iner">
                    <div class="imgs">
                        <img src="<?=base_url("assets/front/images/".$service['image']);?>" alt="">
                    </div>
                    <div class="content">
                        <h4><a href="<?=base_url('service/'.$service['link'])?>"><?=$service['name']?></a></h4>
                        <p class="text"><?php $this->load->helper('text'); echo word_limiter($service['content'], 20) ?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
            <!-- <div class="col-lg-3 col-md-6">
                <div class="iner">
                    <div class="imgs">
                        <img src="<?=base_url("assets/front/images/shubh/project-managemenr.jpg");?>" alt="">
                    </div>
                    <div class="content">
                        <h4><a href="product-det.php">Residential Design</a></h4>
                        <p class="text">Our residential design services cover everything from concept to completion</p>
                    </div>
                </div>
            </div> -->

        </div>
    </div>
</section>

<!-- footer -->

<?php include('footer.php'); ?>
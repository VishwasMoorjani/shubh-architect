<?php 
$myurl='about';
include('header.php')
?>

<!-- about -->

<section id="about">
    <div class="container">
        <div class="row">
            <div class="about-co">
                <h2>About Us</h2>
            </div>
            <div class="content">
                <h3><?=$about['heading']?></h3>
                <h6><?=$about['subheading']?></h6>
            </div>
        </div>
    </div>
</section>

<!-- why-chouse -->

<section id="why-chouse-1">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-6 col-md-12">
                <div class="imgs">
                    <img src="<?=base_url("assets/front/images/".$about['image']);?>" alt="">
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="content">
                <?=$about['content']?>
                  
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
                    <h2><span class="count" data-number="<?=$experience?>"></span></h2>
                    <h3 class="text">Year Of Experience</h3>
                </div>
            </div>

            <div class="col-md-3 col-6">
                <div class="item">
                    <h2><span class="count" data-number="<?=$patient?>"></span>+</h2>
                    <h3 class="text">Satisfied Client</h3>
                </div>
            </div>

            <div class="col-md-3 col-6">
                <div class="item">
                    <h2><span class="count" data-number="<?=$accuracy?>"></span>K</h2>
                    <h3 class="text">Completed Projects</h3>
                </div>
            </div>

            <div class="col-md-3 col-6">
                <div class="item">
                    <h2><span class="count" data-number="<?=$doctor?>"></span>%</h2>
                    <h3 class="text">Current Clients</h3>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- footer -->

<?php include('footer.php'); ?>
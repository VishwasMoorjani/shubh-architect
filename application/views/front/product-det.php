<?php
$myurl = 'product';
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

<section id="services-det">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-6">
                <div class="iner">
                    <div class="imgs">
                        <img src="<?= base_url("assets/front/images/".$oneservices['image']); ?>" alt="">
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="content">
                    <h2><?=$oneservices['name']?></h2>
                    <p class="text"><?=$oneservices['content']?></p>
                    <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">Enquiry Now</a>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- Modal -->
<div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Shubh Architect</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row" action="<?= base_url('enquiry') ?>" method="post">
                    <input type="hidden" name="requestfor" value="<?=$oneservices['link']?>">
                    <div class="col-12">
                        <input class="form-control" name="name" type="text" placeholder="First Name" required />
                    </div>

                    <div class="col-12">
                        <input class="form-control" name="email" type="email" placeholder="Email Address" required />
                    </div>

                    <div class="col-12">
                        <input class="form-control" name="contact" type="number" min="1000000000" mex="9999999999999" pattern="[0-9]" maxlength="10" placeholder="Contact No." required />
                    </div>

                    <div class="col-md-12">
                        <textarea class="form-control" name="message" type="message" placeholder="Message" style="height: 5rem;" required></textarea>
                    </div>

                    <div class="d-grid">
                        <button class="submit" type="submit" name="submit">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>




<!-- footer -->


<?php include('footer.php'); ?>
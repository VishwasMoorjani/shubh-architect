<?php 
$myurl='contact';
include('header.php')
?>

<!-- about -->

<section id="about">
    <div class="container">
        <div class="row">
            <div class="about-co">
                <h2>Contact Us</h2>
            </div>
            <div class="content">
                <h3>Foundations of Architronix</h3>
                <h6>Crafting Architectural Designing and Masterpieces Interior Wonders</h6>
            </div>
        </div>
    </div>
</section>

<!-- why-chouse -->

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="iner">
                    <h4>Address</h4>
                    <p class="text text-2"><i class="fa-solid fa-location-dot"></i><?=$address?></p>

                    <h4>Call Us </h4>
                    <p class="text"><i class="fa-solid fa-phone-volume"></i> <a href="tel:<?=$mobile?>"><?=$mobile?></a></p>
                    <p class="text text-2"><i class="fa-solid fa-phone-volume"></i> <a href="tel:<?=$mobile2?>"><?=$mobile2?></a></p>

                    <h4>Email </h4>
                    <p class="text"><i class="fa-solid fa-envelope"></i> <a
                            href="mailto:<?=$email?>"><?=$email?></a></p>
                </div>
            </div>

            <div class="col-md-8">
                <div class="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14238.060480173059!2d75.771999!3d26.8553704!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db5984d469637%3A0xfc0e466ae4ae9e88!2sShubh%20Architect!5e0!3m2!1sen!2sin!4v1715948827619!5m2!1sen!2sin"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- contact-from -->

<section id="contact-from">
    <div class="container">
        <div class="row inr">
            <div class="col-md-6">
                <div class="imgs">
                    <img src="<?=base_url("assets/front/images/contact-image.jpg");?>" alt="">
                </div>
            </div>

            <div class="col-md-6">
                <div class="from">
                    <form class="row" action="<?=base_url('save')?>" method="post">

                        <div class="col-md-12">
                            <input class="form-control" name="name" type="text" placeholder="First Name"
                                required />
                        </div>

                        <div class="col-md-6">
                            <input class="form-control" name="email" type="email" placeholder="Email Address"
                                required />
                        </div>

                        <div class="col-md-6">
                            <input class="form-control" name="phoneno" type="number" min="1000000000" mex="9999999999999"
                                pattern="[0-9]" maxlength="10" placeholder="Contact No." required />
                        </div>

                        <div class="col-md-12">
                            <textarea class="form-control" name="message" type="message" placeholder="Message"
                                style="height: 5rem;" required></textarea>
                        </div>

                        <div class="btn-1">
                            <button class="btn" type="submit" name="submit">Submit</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- footer -->

<?php include('footer.php'); ?>
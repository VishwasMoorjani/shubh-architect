<footer id="footer">
    <div class="footertop">
        <div class="container">
            <div class="row top">

                <div class="col-lg-4 col-md-6">
                    <div class="about">
                        <a href="<?= base_url(); ?>"><img src="<?= base_url("assets/front/images/logo-full.png"); ?>" alt=""></a>
                        <p><?= $footercontent ?></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 inr">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="<?= base_url(); ?>">Home</a></li>
                        <li><a href="<?= base_url("about"); ?>">About Us</a></li>
                        <li><a href="<?= base_url("service"); ?>">Services</a></li>
                        <li><a href="<?= base_url("gallery"); ?>">Gallery</a></li>
                        <li><a href="<?= base_url("blogs"); ?>">Blog</a></li>
                        <li><a href="<?= base_url("contact"); ?>">Contact Us</a></li>

                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 inr">
                    <h3>Contact Us</h3>
                    <ul class="addres list-unstyled">
                        <li><i class="fa-solid fa-location-dot"></i> &nbsp; <?= $address ?></li>

                        <li>
                            <i class="fa-solid fa-phone"></i> &nbsp; <a href="tel:<?= $mobile ?>"> <?= $mobile ?>
                        </li>
                        <li>
                            <i class="fa-solid fa-phone"></i> &nbsp; <a href="tel:<?= $mobile2 ?>"> <?= $mobile2 ?>
                        </li>

                        <li class="d-flex gap-3 align-items-center">
                            <i class="fa-solid fa-envelope"></i>
                            <div><a href="mailto:<?= $email ?>"><?= $email ?></a></div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <div class="footerbottom">
        <div class="container">
            <div class="row footer-inr">
                <div class="col-12">
                    <ul class="soical list-unstyled align-items-center">
                        <li>

                        <?php if (!empty($facebook)) { ?>
                        <a href="<?= $facebook ?>" target="blank"><i class="fa-brands fa-facebook-f"></i></a>
                    <?php }
                    if (!empty($instagram)) { ?>
                        <a href="<?= $instagram ?>" target="blank"><i class="fa-brands fa-instagram"></i></a>
                    <?php }
                    if (!empty($youtubevideo)) { ?>
                        <a href="<?= $youtubevideo ?>" target="blank"><i class="fa-brands fa-youtube"></i></a>
                    <?php }
                    if (!empty($twitter)) { ?>
                        <a href="<?= $twitter ?>" target="blank"><i class="fa-brands fa-twitter"></i></a>
                    <?php } ?>

                        </li>

                        <li><a href="https://www.gdigitalindia.com/" target="blank"><img src="https://gdigitalindia.in/sites/nutri-fit/<?= base_url("assets/front/images/gdilogo.png"); ?>" alt=""></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--  -->
<div class="quickcontact">
    <a href="https://wa.me/<?= $whatsapp ?>" target="_blank"><img src="<?= base_url("assets/front/images/whatsapp.gif"); ?>"></a>
    <a href="tel:<?= $mobile ?>" target="_blank"><img src="<?= base_url("assets/front/images/call.gif"); ?>"></a>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Shubh Architect</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row" action="<?= base_url('save') ?>" method="post">

                    <div class="col-12">
                        <input class="form-control" name="name" type="text" placeholder="First Name" required />
                    </div>

                    <!-- <div class="col-12">
                        <input class="form-control" name="last-name" type="text" placeholder="Last Name" required />
                    </div> -->

                    <div class="col-12">
                        <input class="form-control" name="email" type="email" placeholder="Email Address" required />
                    </div>

                    <div class="col-12">
                        <input class="form-control" name="phoneno" type="number" min="1000000000" mex="9999999999999" pattern="[0-9]" maxlength="10" placeholder="Contact No." required />
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

<!-- script -->
<script src="<?= base_url("assets/front/js/jquery-3.7.1.min.js"); ?>" type="text/javascript"></script>
<script src="<?= base_url("assets/front/js/aos.js"); ?>" type="text/javascript"></script>
<script src="<?= base_url("assets/front/js/bootstrap.bundle.min.js"); ?>" type="text/javascript"></script>
<script src="<?= base_url("assets/front/js/owl.carousel.min.js"); ?>" type="text/javascript"></script>
<script src="<?= base_url("assets/front/js/magiczoomplus.js"); ?>" type="text/javascript"></script>
<script src="<?= base_url("assets/front/js/custom.js"); ?>" type="text/javascript"></script>





</body>

</html>
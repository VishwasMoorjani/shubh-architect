<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shubh Architect</title>

    <link rel="shortcut icon" href="<?=base_url("assets/front/images/Smart.png");?>" type="image/icon" />

    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="<?=base_url("assets/front/css/aos.css");?>" type="text/css">
    <!-- <link rel="stylesheet" href="<?=base_url("assets/front/css/animate.min.css");?>" type="text/css"> -->
    <link rel="stylesheet" href="<?=base_url("assets/front/css/magiczoomplus.css");?>" type="text/css">
    <link rel="stylesheet" href="<?=base_url("assets/front/css/owl.theme.default.min.css");?>" type="text/css">
    <link rel="stylesheet" href="<?=base_url("assets/front/css/owl.carousel.min.css");?>" type="text/css">
    <link rel="stylesheet" href="<?=base_url("assets/front/css/all.min.css");?>" type="text/css">
    <link rel="stylesheet" href="<?=base_url("assets/front/css/bootstrap.min.css");?>" type="text/css">
    <link rel="stylesheet" href="<?=base_url("assets/front/css/style.css");?>" type="text/css">
    <link rel="stylesheet" href="<?=base_url("assets/front/css/responsive.css");?>" type="text/css">

</head>

<body>

    <header>
        <div id="myHeader">

            <div class="headermn">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg p-0 align-items-center">
                    <a class="navbar-brand" data-aos="fade-right" href="<?=base_url();?>"><img
                            src="<?=base_url("assets/front/images/logo-full.png");?>" alt=""></a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <span><i class="fa-solid fa-bars"></i></span>
                    </button>

                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                        aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img
                                    src="<?=base_url("assets/front/images/logo-full.png");?>" alt=""></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>

                        <div class="offcanvas-body align-items-center">

                            <ul class="navbar-nav justify-content-center flex-grow-1">
                                <li class="nav-item"><a class="nav-link <?=($myurl == 'home')?'acctive':''?>" aria-current="page"
                                        href="<?=base_url();?>">Home</a>
                                </li>
                                <li class="nav-item"><a class="nav-link <?=($myurl == 'about')?'acctive':''?>" href="<?=base_url("about");?>">About</a></li>
                                <li class="nav-item"><a class="nav-link <?=($myurl == 'product')?'acctive':''?>" href="<?=base_url("service");?>">Our Services</a></li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link <?=($myurl == 'product')?'acctive':''?>" href="javascript:void(0);" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Our Products <i class="fa-solid fa-chevron-down"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <div class="row">

                                            <div class="col-lg-6 col-md-6 col-12">
                                                <h3>Marble Temple</h3>
                                                <ul class="list-unstyled" data-aos="fade-up" data-aos-delay="200">
                                                    <li><a href="#">Marble Home Temple</a></li>
                                                    <li><a href="#">Outdoor Temple</a></li>
                                                    <li><a href="#">Big Temple</a></li>
                                                    <li><a href="#">Stone Temple</a></li>
                                                </ul>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-12">
                                                <h3>God Statue</h3>
                                                <ul class="list-unstyled" data-aos="fade-up" data-aos-delay="200">
                                                    <li><a href="">Radha Krishna Statue</a></li>
                                                    <li><a href="">Durga Mata Statue</a></li>
                                                    <li><a href="">Durga Mata Statue</a></li>
                                                    <li><a href="">Durga Mata Statue</a></li>
                                                   
                                                </ul>
                                            </div>

                                        </div>
                                    </div>

                                </li> -->
                                <li class="nav-item"><a class="nav-link <?=($myurl == 'blog')?'acctive':''?>" href="<?=base_url("blogs");?>">Blog</a></li>
                                <li class="nav-item"><a class="nav-link <?=($myurl == 'gallery')?'acctive':''?>" href="<?=base_url("gallery");?>">Gallery</a></li>
                                <li class="nav-item"><a class="nav-link <?=($myurl == 'contact')?'acctive':''?>" href="<?=base_url("contact");?>">Contact Us</a></li>
                            </ul>

                            <ul class="whatsapp d-flex list-unstyled" data-aos="fade-left">
                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Enquiry
                                            Now</a></li>
                                </ul>
                        </div>
                    </div>

                </nav>
            </div>
            </div>
        </div>
    </header>
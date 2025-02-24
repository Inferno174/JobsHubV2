<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Jobhub - Job Board HTML Website Template</title>
	<link rel="canonical" href="https://wp.alithemes.com/html/jobhub/frontend/index.html" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/theme/favicon.svg" />
    <!-- Template CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/plugins/animate.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/main.css')); ?>" />
</head>
<body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <img src="<?php echo e(asset('assets/imgs/theme/loading.gif')); ?>" alt="jobhub" />
                </div>
            </div>
        </div>
    </div>
    <header class="header sticky-bar">
        <div class="container">
            <div class="main-header">
                <div class="header-left">
                    <div class="header-logo">
                        <a href="index.html" class="d-flex"><img alt="jobhub" src="<?php echo e(asset('assets/imgs/theme/jobhub-logo.svg')); ?>" /></a>
                    </div>
                    <div class="header-nav">
                        <nav class="nav-main-menu d-none d-xl-block">
                            <ul class="main-menu">
                                <li class="">
                                    <a class="active" href="<?php echo e(route('users.home')); ?>">Home</a>
                                </li>
                                <li class="">
                                    <a href="<?php echo e(route('users.jobs')); ?>">Browse Jobs</a>
                                </li>
                                <li class="">
                                    <a href="<?php echo e(route('users.employer')); ?>">Employers</a>
                                </li>
                                <li class="">
                                    <a href="<?php echo e(route('users.blogs')); ?>">Job blogs</a>
                                </li>
                                <li class="">
                                    <a href="<?php echo e(route('users.aboutus')); ?>">About us</a>
                                    
                                </li>
                                <li class="">
                                    <a href="<?php echo e(route('users.contactus')); ?>">Contact us</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="burger-icon burger-icon-white">
                            <span class="burger-icon-top"></span>
                            <span class="burger-icon-mid"></span>
                            <span class="burger-icon-bottom"></span>
                        </div>
                    </div>
                </div>
                <div class="header-right">
                    <div class="block-signin">
                        <a href="<?php echo e(route('users.blogs')); ?>" class="text-link-bd-btom hover-up">Apply Now</a>
                        <a href="<?php echo e(route('login')); ?>" class="btn btn-default btn-shadow ml-40 hover-up">Sign in</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-top">
                <div class="user-account">
                    <img src="<?php echo e(asset('assets/imgs/avatar/ava_1.png')); ?>" alt="jobhub" />
                    <div class="content">
                        <h6 class="user-name">Howdy, <span class="text-brand">Melvin Rosario</span></h6>
                        <p class="font-xs text-muted">You have 2 new messages</p>
                    </div>
                </div>
                <div class="burger-icon burger-icon-white">
                    <span class="burger-icon-top"></span>
                    <span class="burger-icon-mid"></span>
                    <span class="burger-icon-bottom"></span>
                </div>
            </div>
            <div class="mobile-header-content-area">
                <div class="perfect-scroll">
                    <div class="mobile-search mobile-header-border mb-30">
                        <form action="#">
                            <input type="text" placeholder="Search for items…" />
                            <i class="fi-rr-search"></i>
                        </form>
                    </div>
                    <div class="mobile-menu-wrap mobile-header-border">
                        <!-- mobile menu start -->
                        <nav>
                            <ul class="mobile-menu font-heading">
                                <li class="">
                                    <a class="active" href="<?php echo e(route('users.home')); ?>">Home</a>
                                </li>
                                <li class="">
                                    <a href="<?php echo e(route('users.jobs')); ?>">Browse Jobs</a>
                                </li>
                                <li class="">
                                    <a href="<?php echo e(route('users.employer')); ?>">Employers</a>
                                </li>
                                <li class="">
                                    <a href="<?php echo e(route('users.blogs')); ?>">Job blog</a>
                                </li>
                                <li class="">
                                    <a href="<?php echo e(route('users.aboutus')); ?>">About us</a>
                                </li>
                                <li class="">
                                    <a href="<?php echo e(route('users.contactus')); ?>">Contact us</a>
                                </li>
                            </ul>
                        </nav>
                        <!-- mobile menu end -->
                    </div>
                    <div class="mobile-account">
                        <h6 class="mb-10">Your Account</h6>
                        <ul class="mobile-menu font-heading">
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Work Preferences</a></li>
                            <li><a href="#">My Boosted Shots</a></li>
                            <li><a href="#">My Collections</a></li>
                            <li><a href="#">Account Settings</a></li>
                            <li><a href="#">Go Pro</a></li>
                            <li><a href="#">Sign Out</a></li>
                        </ul>
                    </div>
                    <div class="mobile-social-icon mb-50">
                        <h6 class="mb-25">Follow Us</h6>
                        <a href="#"><img src="<?php echo e(asset('assets/imgs/theme/icons/icon-facebook.svg')); ?>" alt="jobhub" /></a>
                        <a href="#"><img src="<?php echo e(asset('assets/imgs/theme/icons/icon-twitter.svg')); ?>" alt="jobhub" /></a>
                        <a href="#"><img src="<?php echo e(asset('assets/imgs/theme/icons/icon-instagram.svg')); ?>" alt="jobhub" /></a>
                        <a href="#"><img src="<?php echo e(asset('assets/imgs/theme/icons/icon-pinterest.svg')); ?>" alt="jobhub" /></a>
                        <a href="#"><img src="<?php echo e(asset('assets/imgs/theme/icons/icon-youtube.svg')); ?>" alt="jobhub" /></a>
                    </div>
                    <div class="site-copyright">Copyright 2022 © JobHub. <br />Designed by AliThemes.</div>
                </div>
            </div>
        </div>
    </div>
    <!--End header-->
    <!-- Content -->
    <main class="main">
        <?php echo $__env->yieldContent('content'); ?>
    </main>
    <!-- End Content -->
    <!-- Footer -->
    <footer class="footer mt-50">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <a href="index.html"><img alt="jobhub" src="<?php echo e(asset('assets/imgs/theme/jobhub-logo.svg')); ?>" /></a>
                    <div class="mt-20 mb-20">Jobhub is the heart of the design community and the best resource to discover and connect with designers and jobs worldwide.</div>
                </div>
                <div class="col-md-2 col-xs-6">
                    <h6>Company</h6>
                    <ul class="menu-footer mt-40">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Our Team</a></li>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-xs-6">
                    <h6>Product</h6>
                    <ul class="menu-footer mt-40">
                        <li><a href="#">Feature</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Credit</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-xs-6">
                    <h6>Download</h6>
                    <ul class="menu-footer mt-40">
                        <li><a href="#">iOS</a></li>
                        <li><a href="#">Android</a></li>
                        <li><a href="#">Microsoft</a></li>
                        <li><a href="#">Desktop</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-xs-6">
                    <h6>Support</h6>
                    <ul class="menu-footer mt-40">
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom mt-50">
                <div class="row">
                    <div class="col-md-6">
                        Copyright ©2021 <a href="#"><strong>Jobhub</strong></a>. All Rights Reserved
                    </div>
                    <div class="col-md-6 text-md-end text-start">
                        <div class="footer-social">
                            <a href="#" class="icon-socials icon-facebook"></a>
                            <a href="#" class="icon-socials icon-twitter"></a>
                            <a href="#" class="icon-socials icon-instagram"></a>
                            <a href="#" class="icon-socials icon-linkedin"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <!-- Vendor JS-->
    <script src="<?php echo e(asset('assets/js/vendor/modernizr-3.6.0.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/vendor/jquery-3.6.0.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/vendor/jquery-migrate-3.3.0.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/vendor/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/plugins/waypoints.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/plugins/wow.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/plugins/magnific-popup.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/plugins/perfect-scrollbar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/plugins/select2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/plugins/isotope.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/plugins/scrollup.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/plugins/swiper-bundle.min.js')); ?>"></script>
    <!-- Template  JS -->
    <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\Users\E COM BUYER\OneDrive\Documents\GitHub\JobsHubV2\resources\views\layouts\userlayout.blade.php ENDPATH**/ ?>
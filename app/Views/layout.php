<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet"/>

        <title>Portofolio</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="assets/css/fontawesome.css" />
        <link rel="stylesheet" href="assets/css/templatemo-style.css" />
        <link rel="stylesheet" href="assets/css/owl.css" />
        <link rel="stylesheet" href="assets/css/lightbox.css" />
    </head>

    <body>
        <div id="page-wraper">
        <!-- Sidebar Menu -->
        <div class="responsive-nav">
            <i class="fa fa-bars" id="menu-toggle"></i>
            <div id="menu" class="menu">
            <i class="fa fa-times" id="menu-close"></i>
            <div class="container">
                <div class="image">
                    <a href="#"><img src="assets/images/author-image.jpg" alt="" /></a>
                </div>
                <div class="author-content">
                <h4>Zahratul Millah</h4>
                <span>Undergraduate Student</span>
                </div>
                <nav class="main-nav" role="navigation">
                <ul class="main-menu">
                    <li><a href="<?php echo base_url('/');?>">About Me</a></li>
                    <li><a href="<?php echo base_url('/education');?>">Education</a></li>
                    <li><a href="<?php echo base_url('/tourist');?>">Tourist</a></li>
                </ul>
                </nav>
                <div class="social-network">
                    <ul class="soial-icons" style="margin-top:150px">
                        <li>
                            <a href="https://github.com/hipzi"><i class="fa fa-github"></i></a>
                        </li>
                        <li>
                            <a href=" http://linkedin.com/in/zahratul-millah-b287351a5"><i class="fa fa-linkedin"></i></a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/channel/UC5fymiLkyZxd2cGIa6m3FIQ"><i class="fa fa-youtube"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            </div>
        </div>

        <!-- Start About Me -->
        <?= $this->renderSection('profile') ?>
        <!-- End About Me -->

        <!-- Start Education -->
        <?= $this->renderSection('education') ?>
        <!-- End Education -->

        <!-- Start Tourist -->
        <?= $this->renderSection('tourist') ?>
        <!-- End Tourist -->

        </div>

        <!-- Scripts -->
        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <script src="assets/js/isotope.min.js"></script>
        <script src="assets/js/owl-carousel.js"></script>
        <script src="assets/js/lightbox.js"></script>
        <script src="assets/js/custom.js"></script>
        <script>

        <?= $this->renderSection('script') ?>

        </script>
    </body>
</html>

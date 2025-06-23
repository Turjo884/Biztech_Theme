<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!-- <title>BizTech - HTML 5 Template Preview</title> -->

<!-- Fav Icon -->
<link rel="icon" href="<?php get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<!-- Stylesheets -->
 <?php wp_head(); ?>


</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">


        <!-- preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">x</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="b" class="letters-loading">
                                b
                            </span>
                            <span data-text-preloader="i" class="letters-loading">
                                i
                            </span>
                            <span data-text-preloader="z" class="letters-loading">
                                z
                            </span>
                            <span data-text-preloader="t" class="letters-loading">
                                t
                            </span>
                            <span data-text-preloader="e" class="letters-loading">
                                e
                            </span>
                            <span data-text-preloader="c" class="letters-loading">
                                c
                            </span>
                            <span data-text-preloader="h" class="letters-loading">
                                h
                            </span>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        <!-- preloader end -->

        <!-- Start Header Template Calling Part -->
        <?php echo get_template_part('template-parts/header/header-1')?>
        <!-- End Header Template Calling Part -->


        <!-- page-title -->
        <section class="page-title centred">
            <div class="bg-layer" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/background/page-title.jpg);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>Blog Grid</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li>Blog Grid</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->
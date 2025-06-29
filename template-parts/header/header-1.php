<?php

    $timing = get_theme_mod('timing' , esc_html__('Mon-Fri 8:00 am-6:00 pm' , 'biztech'));

    $phone_number = get_theme_mod('phone_number' , esc_html__('+91-213-666-0027' , 'biztech'));

    $email_address = get_theme_mod('email_address' , esc_html__('info@example.com' , 'biztech'));

    $address = get_theme_mod('address' , esc_html__('Chicago 12, Melborne City, USA' , 'biztech'));

    $login_button = get_theme_mod('login_button' , esc_html__('Login' , 'biztech'));

    $login_button_url = get_theme_mod('login_button_url' , esc_html__('URL' , 'biztech'));

   $free_consulting = get_theme_mod('free_consulting', '#');


?>
        <!-- main header -->
        <header class="main-header header-style-two">
            <!-- header-top -->
            <div class="header-top">
                <div class="auto-container">
                    <div class="top-inner">
                        <div class="top-left">

                      
                            <ul class="info clearfix">
                        <?php if(!empty($timing)) : ?>
                                <li><i class="icon-1"></i><?php echo esc_html($timing ,'')?></li>
                        <?php endif; ?>

                        <?php if(!empty($phone_number)) : ?>
                                <li><i class="icon-2"></i><a href="tel:<?php echo esc_attr($phone_number , ''); ?>"><?php echo esc_html($phone_number ,'')?></a></li>
                        <?php endif; ?>

                        <?php if(!empty($email_address)) : ?>
                                <li><i class="icon-3"></i><a href="mailto: <?php echo esc_attr($email_address); ?>"><?php echo esc_html($email_address ,'')?></a></li>
                        <?php endif; ?>
                            </ul>
                        

                        </div>
                        <div class="top-right">

                        <?php if(!empty($login_button)) : ?>
                            <div class="login"><a href="<?php echo esc_url($login_button_url); ?>"><?php echo esc_html($login_button ,'')?></a></div>
                        <?php endif; ?>

                            <ul class="social-links clearfix">
                            <?php biztech_social(); ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-lower -->
            <div class="header-lower">
                <div class="auto-container">
                    <div class="outer-box">
                        <div class="logo-box">
                            <figure class="logo">
                                <?php echo biztech_logo(); ?>
                            </figure>
                        </div>
                        <div class="menu-area clearfix">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <?php biztech_menu(); ?>
                                    <!-- <ul class="navigation clearfix">
                                        <li class="dropdown"><a href="index.html">Home</a>
                                            <ul>
                                                <li><a href="index.html">Home Page 01</a></li>
                                                <li><a href="index-2.html">Home Page 02</a></li>
                                                <li><a href="index-3.html">Home Page 03</a></li>
                                                <li><a href="index-onepage.html">OnePage Home</a></li>
                                                <li><a href="index-rtl.html">RTL Home</a></li>
                                                <li class="dropdown"><a href="index.html">Header Style</a>
                                                    <ul>
                                                        <li><a href="index.html">Header Style 01</a></li>
                                                        <li><a href="index-2.html">Header Style 02</a></li>
                                                        <li><a href="index-3.html">Header Style 03</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>  
                                        <li class="dropdown"><a href="index.html">Services</a>
                                            <ul>
                                                <li><a href="services.html">Our Services 1</a></li>
                                                <li><a href="services-2.html">Our Services 2</a></li>
                                                <li><a href="service-details.html">Tax Management</a></li>
                                                <li><a href="service-details-2.html">Strategy & Planning</a></li>
                                                <li><a href="service-details-3.html">Program Manager</a></li>
                                                <li><a href="service-details-4.html">Investment Policy</a></li>
                                                <li><a href="service-details-5.html">Financial Advices</a></li>
                                                <li><a href="service-details-6.html">Insurance Strategy</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="index.html">Pages</a>
                                            <ul>
                                                <li class="dropdown"><a href="index.html">Team</a>
                                                    <ul>
                                                        <li><a href="team.html">Team Member</a></li>
                                                        <li><a href="team-details.html">Team Details</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown"><a href="index.html">Portfolio</a>
                                                    <ul>
                                                        <li><a href="portfolio.html">Portfolio 1</a></li>
                                                        <li><a href="portfolio-2.html">Portfolio 2</a></li>
                                                        <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="pricing.html">Pricing Table</a></li>
                                                <li><a href="career.html">Career</a></li>
                                                <li><a href="faq.html">Faq’s</a></li>
                                                <li><a href="testimonial.html">Testimonials</a></li>
                                                <li><a href="error.html">404</a></li>
                                            </ul>
                                        </li> 
                                        <li class="dropdown"><a href="index.html">Shop</a>
                                            <ul>
                                                <li><a href="shop.html">Our Shop</a></li>
                                                <li><a href="shop-details.html">Shop Details</a></li>
                                                <li><a href="cart.html">Cart Page</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                            </ul>
                                        </li> 
                                        <li class="dropdown"><a href="index.html">Elements</a>
                                            <div class="megamenu">
                                                <div class="row clearfix">
                                                    <div class="col-lg-4 column">
                                                        <ul>
                                                            <li><h4>Elements 1</h4></li>
                                                            <li><a href="feature-element-1.html">Feature Block 01</a></li>
                                                            <li><a href="feature-element-2.html">Feature Block 02</a></li>
                                                            <li><a href="feature-element-3.html">Feature Block 03</a></li>
                                                            <li><a href="feature-element-4.html">Feature Block 04</a></li>
                                                            <li><a href="service-element-1.html">Service Block 01</a></li>
                                                            <li><a href="service-element-2.html">Service Block 02</a></li>
                                                            <li><a href="service-element-3.html">service Block 03</a></li>
                                                            <li><a href="service-element-4.html">service Block 04</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 column">
                                                        <ul>
                                                            <li><h4>Elements 2</h4></li>
                                                            <li><a href="about-element-1.html">About Block 01</a></li>
                                                            <li><a href="about-element-2.html">About Block 02</a></li>
                                                            <li><a href="about-element-3.html">About Block 03</a></li>
                                                            <li><a href="project-element-1.html">Project Block 01</a></li>
                                                            <li><a href="project-element-2.html">Project Block 02</a></li>
                                                            <li><a href="project-element-3.html">project Block 03</a></li>
                                                            <li><a href="project-element-4.html">project Block 04</a></li>
                                                            <li><a href="working-element-1.html">Working Block 01</a></li>
                                                        </ul>
                                                    </div> 
                                                    <div class="col-lg-4 column">
                                                        <ul>
                                                            <li><h4>Elements 3</h4></li>
                                                            <li><a href="working-element-2.html">Working Block 02</a></li>
                                                            <li><a href="working-element-3.html">Working Block 03</a></li>
                                                            <li><a href="working-element-4.html">Working Block 04</a></li>
                                                            <li><a href="news-element-1.html">News Block 01</a></li>
                                                            <li><a href="news-element-2.html">News Block 02</a></li>
                                                            <li><a href="news-element-3.html">News Block 03</a></li>
                                                            <li><a href="news-element-4.html">News Block 04</a></li>
                                                            <li><a href="clients-element.html">Clients Block</a></li>
                                                        </ul>
                                                    </div>                                     
                                                </div>                                            
                                            </div>
                                        </li>
                                        <li class="current dropdown"><a href="index.html">Blog</a>
                                            <ul>
                                                <li><a href="blog.html">Blog Grid</a></li>
                                                <li><a href="blog-2.html">Blog Standard</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>  
                                        <li><a href="contact.html">Contact Us</a></li> 
                                    </ul> -->
                                </div>
                            </nav>
                        </div>

                        <?php if(!empty($free_consulting)) : ?>
                        <ul class="menu-right-content">
                            <li class="btn-box">
                                <a href="<?php echo esc_url($free_consulting); ?>" class="theme-btn-one">
                                <?php echo esc_html__('Free Consulting', 'biztech'); ?>
                                </a>
                            </li>
                        </ul>
                        <?php endif; ?>

                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="auto-container">
                    <div class="outer-box">
                        <div class="logo-box">
                            <figure class="logo">
                                <?php echo biztech_logo(); ?>
                            </figure>
                        </div>
                        <div class="menu-area clearfix">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>

                        <?php if(!empty($free_consulting)) : ?>
                        <ul class="menu-right-content">
                            <li class="btn-box">
                                <a href="<?php echo esc_url($free_consulting); ?>" class="theme-btn-one">
                                <?php echo esc_html__('Free Consulting', 'biztech'); ?>
                                </a>
                            </li>
                        </ul>
                        <?php endif; ?>
                        
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            
            <nav class="menu-box">
                <div class="nav-logo">
                    <?php echo biztech_logo(); ?>
                </div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <?php if(!empty( $address)) : ?>
                                <li><a href="<?php echo esc_url( $address); ?>"><?php echo esc_html($address ,'')?></a></li>
                        <?php endif; ?>

                        <?php if(!empty($phone_number)) : ?>
                                <li><a href="tel:<?php echo esc_attr($phone_number , ''); ?>"><?php echo esc_html($phone_number ,'')?></a></li>
                        <?php endif; ?>

                        <?php if(!empty($email_address)) : ?>
                                <li><a href="mailto: <?php echo esc_attr($email_address); ?>"><?php echo esc_html($email_address ,'')?></a></li>
                        <?php endif; ?>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <?php biztech_social(); ?>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->
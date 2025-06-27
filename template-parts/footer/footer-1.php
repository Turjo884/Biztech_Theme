    <!-- main-footer -->
    <footer class="main-footer">
        <?php if (is_active_sidebar('footer-1') || is_active_sidebar('footer-2') || is_active_sidebar('footer-3') ||is_active_sidebar('footer-4')): ?>
            <div class="widget-section">
                <div class="pattern-layer">
                    <div class="pattern-1" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/shape/shape-20.png);"></div>
                    <div class="pattern-2" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/shape/shape-21.png);"></div>
                </div>
                <div class="auto-container">
                    <div class="row clearfix">

                        <?php if(is_active_sidebar('footer-1')): ?>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <?php dynamic_sidebar('footer-1'); ?>
                        </div>
                        <?php endif; ?>

                        <?php if(is_active_sidebar('footer-2')): ?>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <?php dynamic_sidebar('footer-2'); ?>
                            <!-- <div class="links-widget footer-widget ml_50">
                                <div class="widget-title">
                                    <h3>Quick Link</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix"> 
                                        <li><a href="index.html">About Us</a></li>
                                        <li><a href="index.html">Services</a></li>
                                        <li><a href="index.html">Cause</a></li>
                                        <li><a href="index.html">Pricing</a></li>
                                        <li><a href="index.html">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div> -->
                        </div>
                        <?php endif; ?>

                        <?php if(is_active_sidebar('footer-3')): ?>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column"> <?php dynamic_sidebar('footer-3'); ?>
                            <!-- <div class="links-widget footer-widget ml_30">
                                <div class="widget-title">
                                    <h3>Usefull Links</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix"> 
                                        <li><a href="index.html">Privacy Policy</a></li>
                                        <li><a href="index.html">Terms & Condition</a></li>
                                        <li><a href="index.html">Support</a></li>
                                        <li><a href="index.html">Disclaimer</a></li>
                                        <li><a href="index.html">Faq</a></li>
                                    </ul>
                                </div>
                            </div> -->
                        </div>
                        <?php endif; ?>

                        <?php if(is_active_sidebar('footer-4')): ?>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                             <?php dynamic_sidebar('footer-4'); ?>
                            <!-- <div class="contact-widget footer-widget">
                                <div class="widget-title">
                                    <h3>Contact</h3>
                                </div>
                                <div class="widget-content">
                                    <p>Tincidunt neque pretium lectus donec risus.</p>
                                    <ul class="info-list clearfix">  
                                        <li><i class="icon-23"></i>New Hyde Park, NY 11040</li>
                                        <li><i class="icon-3"></i><a href="mailto:example@info.com">example@info.com</a></li>
                                        <li><i class="icon-2"></i><a href="tel:3336660000">333 666 0000</a></li>
                                    </ul>
                                </div>
                            </div> -->
                        </div>
                        <?php endif; ?>
                        
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <div class="footer-bottom centred">
                <div class="auto-container">
                    <div class="copyright">
                        <p>Copyright 2023 by <a href="index.html">biztech</a> theme All Right Reserved.</p>
                    </div>
                </div>
            </div>
    </footer>
    <!-- main-footer end -->
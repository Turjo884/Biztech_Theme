<?php
    get_header();

    $no_sidebar = is_active_sidebar('blog-sidebar') ? '' : 'justify-content-center';
?>

        <!-- sidebar-page-container -->
        <section class="sidebar-page-container pt_150 pb_150">
            <div class="auto-container">
                <div class="row clearfix <?php echo esc_attr('$no_sidebar'); ?>">
                    <div class="col-lg-8 col-md-12 col-sm-12 sidebar-side">
                        <div class="blog-standard-content">

                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                         <?php get_template_part('template-parts/content' ,  get_post_format()); ?>

                        <?php endwhile; else : ?>
	                        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                        <?php endif; ?>

                        <!-- pagination -->
                        <div class="pagination-wrapper">
                            <?php biztech_pagination(); ?>
                        </div>

                        </div>
                    </div>

                    <!-- Sidebar Start -->
                      <?php if (is_active_sidebar('blog-sidebar')) : ?>
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <?php get_sidebar(); ?>
                        <!-- <div class="blog-sidebar ml_40">
                            <div class="sidebar-widget search-widget">
                                <div class="search-form">
                                    <form action="blog-2.html" method="post">
                                        <div class="form-group">
                                            <input type="search" name="search-field" placeholder="Search..." required>
                                            <button type="submit"><i class="icon-4"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="sidebar-widget category-widget">
                                <div class="widget-title">
                                    <h3>Categories</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="category-list clearfix">
                                        <li><a href="blog-details.html">Eldercare</a></li>
                                        <li><a href="blog-details.html">Home Care</a></li>
                                        <li><a href="blog-details.html">Insurance</a></li>
                                        <li><a href="blog-details.html">Memory Care</a></li>
                                        <li><a href="blog-details.html">Nursing</a></li>
                                        <li><a href="blog-details.html">Senior Care</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget post-widget">
                                <div class="widget-title">
                                    <h3>Recent Article</h3>
                                </div>
                                <div class="post-inner">
                                    <div class="post">
                                        <figure class="post-thumb"><a href="blog-details.html"><img src="assets/images/news/post-1.jpg" alt=""></a></figure>
                                        <h5><a href="blog-details.html">How to Manage Online Business’s</a></h5>
                                        <span class="post-date">Apr 17, 2022</span>
                                    </div>
                                    <div class="post">
                                        <figure class="post-thumb"><a href="blog-details.html"><img src="assets/images/news/post-2.jpg" alt=""></a></figure>
                                        <h5><a href="blog-details.html">Your Business is Ready For Integration</a></h5>
                                        <span class="post-date">Apr 16, 2022</span>
                                    </div>
                                    <div class="post">
                                        <figure class="post-thumb"><a href="blog-details.html"><img src="assets/images/news/post-3.jpg" alt=""></a></figure>
                                        <h5><a href="blog-details.html">Ensure that Copies of Documents</a></h5>
                                        <span class="post-date">Apr 15, 2022</span>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-widget tags-widget">
                                <div class="widget-title">
                                    <h3>Popular Tags</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="tags-list clearfix">
                                        <li><a href="blog-details.html">Agency</a></li>
                                        <li><a href="blog-details.html">Business</a></li>
                                        <li><a href="blog-details.html">Consult</a></li>
                                        <li><a href="blog-details.html">Corporate</a></li>
                                        <li><a href="blog-details.html">Marketing</a></li>
                                        <li><a href="blog-details.html">Industry</a></li>
                                        <li><a href="blog-details.html">Idea</a></li>
                                        <li><a href="blog-details.html">Data</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> -->
                    </div>
                     <?php endif; ?>
                </div>
            </div>
        </section>
        <!-- sidebar-page-container end -->

<?php
    get_footer();
?>    
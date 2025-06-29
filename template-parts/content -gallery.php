<div id="post-<?php the_ID(); ?>" <?php post_class('news-block-one')?>>
    <div class="inner-box">
        <div class="image-box">
            <figure class="image"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></figure>
                <h2>
                    <?php echo get_the_date('d'); ?>
                    <span><?php echo strtoupper(get_the_date('F')); ?></span>
                </h2>
        </div>
        <div class="lower-content">
            <?php get_template_part('template-parts/blog/blog-meta'); ?>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p><?php the_excerpt(); ?></p>
        </div>
    </div>
</div>
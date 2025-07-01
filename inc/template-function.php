<?php

    // Header Logo
    function biztech_logo(){ 
        
        $main_logo = get_theme_mod('header_logo' , get_template_directory_uri().'/assets/images/logo.png');
        
        ?>

        <a href="<?php echo home_url(); ?>">
            <img src="<?php echo esc_url($main_logo); ?>" alt="">
        </a>

     <?php   
    }

    // Header Menu
    function biztech_menu(){
        wp_nav_menu(array(
            'theme_location' => 'main-menu',
            'container' => '',
            'menu_class' => 'navigation clearfix',
            'fallback_cb' => 'Biztech_Walker_Nav_Menu::fallback',
            'walker' => new Biztech_Walker_Nav_Menu,
        ));
    }

    // Header Social Media 
    function biztech_social(){

    $social_fb = get_theme_mod('social_fb' , esc_html__('#' , 'biztech'));

    $social_tw = get_theme_mod('social_tw' , esc_html__('#' , 'biztech'));

    $social_in = get_theme_mod('social_in' , esc_html__('#' , 'biztech'));

        ?>

        <?php if(!empty($social_fb)) : ?>
            <li><a target="_blank" href="<?php echo esc_url($social_fb);?>"><i class="fab fa-facebook-f"></i></a></li>
        <?php endif; ?>

        <?php if(!empty($social_tw)) : ?>
            <li><a target="_blank" href="<?php echo esc_url($social_tw);?>"><i class="fab fa-twitter"></i></a></li>
        <?php endif; ?>

        <?php if(!empty($social_in)) : ?>
            <li><a target="_blank" href="<?php echo esc_url($social_in);?>"><i class="fab fa-linkedin-in"></i></a></li>
        <?php endif; ?>

        <?php
    }


   // biztech_pagination
    function biztech_pagination(){
        $pages = paginate_links( array( 
            'type' => 'array',
            'prev_text' => __('<i class="icon-45"></i>', 'biztech'),
            'next_text' => __('<i class="icon-44"></i>', 'biztech'),
        ) );

        if( $pages ) {
            echo '<ul class="pagination clearfix">';
            foreach ( $pages as $page ) {
                // Convert span.current to a class="current" <a> to match your HTML structure
                if ( strpos($page, 'current') !== false && strpos($page, '<span') !== false ) {
                    $page = str_replace('<span', '<a class="current"', $page);
                    $page = str_replace('</span>', '</a>', $page);
                }
                echo "<li>$page</li>";
            }
            echo '</ul>';
        }
    }

<?php

$cat = get_the_category();

?>

<ul class="post-info clearfix"> 
    <li><i class="icon-21"></i><a href="<?php the_permalink(); ?>"><?php the_author(); ?></a></li>
    <li><i class="icon-22"></i><a href="<?php the_permalink(); ?>"><?php echo get_comments_number(); ?>
    </a></li>
    <li><i class="icon-23"></i><a href="<?php the_permalink(); ?>"><?php echo $cat[0]->name?></a></li>
</ul>
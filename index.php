<?php get_header();?>

    <?php

        if(have_posts()):
            while(have_posts()): the_post(); ?>
            <h1><?php the_title();?></h1>
            <small>Posted on: <?php the_time('F j, y');?> at <?php the_time('g:i a');?>, in <?php the_category();?></small>
            <p><?php the_content();?></p>
        <?php endwhile;
        endif;

    ?>

<?php get_footer();?>
<?php
/*
 * Template Name: Package_details
 * Template Post Type: post, page, product
 */
?>

 <?php get_header();  ?>


<?php /* The loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="main-post-div">
                <div class="single-page-post-heading">
                <h1><?php the_title(); ?></h1>
                </div>
                <div class="content-here">
                <?php  the_content();  ?>
                </div>
            
                </div>

            <?php endwhile; ?>
</br>
            <h1> hello </h1>

            <?php get_footer();  ?>
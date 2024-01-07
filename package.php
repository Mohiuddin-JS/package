<?php
/*
Template Name: Package
*/
?>

<?php get_header();  ?>

<?php   $args = array( 'post_type' => 'package', 'posts_per_page' => 10 );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="package">
        
            <?php the_title(); 
        if ( has_post_thumbnail( $post->ID ) ) {
        echo '<a href="' . get_permalink( $post->ID ) . '" title="' . esc_attr( $post->post_title ) . '">';
        echo get_the_post_thumbnail( $post->ID, 'thumbnail' );
        echo '</a>';
       
    
    }

        

?>



            </div>


            <h1> hello </h1>
    <?php endwhile; ?>

    <?php get_footer();  ?>
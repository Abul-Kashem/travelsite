<?php 
/* 
* Template Name: About Us
*/


get_header(); ?>

<main role="main">
    <!-- section -->
    <section>
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <h2><?php the_title(); ?></h2>

        <!-- article -->
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <?php the_content(); ?>


            <br class="clear">


        </article>
        <!-- /article -->
        <div class="about-images">
            <?php if( get_field('number_one') ): ?>
            <div class="photo">
                <?php
               $image_id = get_field('number_one');
                echo wp_get_attachment_image( $image_id, 'medium', false, array('class'=>'photo-img') );
               ?>
            </div>
            <?php endif; ?>
            <?php if( get_field('number_two') ): ?>
            <div class="photo">
                <?php
               $image_id = get_field('number_two');
                echo wp_get_attachment_image( $image_id, 'medium', false, array('class'=>'photo-img') );
               ?>
            </div>
            <?php endif; ?>
        </div>

        <?php endwhile; ?>

        <?php else: ?>

        <!-- article -->
        <article>

            <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

        </article>
        <!-- /article -->

        <?php endif; ?>

    </section>
    <!-- /section -->
</main>


<?php get_footer(); ?>
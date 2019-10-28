<?php 
/*
* Template Name: Tour Page
*/
get_header(); ?>
<div class="wrapper">
    <main role="main">
        <!-- section -->
        <section>

            <?php if (have_posts()): while (have_posts()) : the_post(); ?>
            <h2><span><?php the_title(); ?></span></h2>

            <!-- article -->
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php 
                $args = array(
                    'post_type'=>'tours',
                    'posts_per_page'=>-1,
                    'orderby'=>'title',
                    'order'=>'ASC'
                );
                ?>
                <ul class="tours">
                    <?php $tours = new WP_Query($args); while($tours->have_posts()): $tours->the_post(); ?>
                    <li class="grid2-4">
                        <div class="featured-tour">
                            <?php the_post_thumbnail('featured-tours')?>
                            <a href="<?php echo the_permalink(); ?>" class="more-info">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/moreinfo.png" alt="">
                            </a>
                        </div>
                        <!-- .featured-tour -->
                        <h3>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <?php 
                            $format = 'd F, Y';
                            $leaving_date = strtotime(get_field('leaving_date'));
                            $leaving_date = date_i18n($format, $leaving_date );

                            $returning_date = strtotime(get_field('returning_date'));
                            $returning_date = date_i18n( $format, $returning_date );
                        ?>
                        <div class="date-price clear">
                            <p class="date"><?php echo $leaving_date . ' - ' . $returning_date ?></p>
                            <p class="price"><?php the_field('price'); ?></p>
                        </div>
                        <div class="tour-description">
                            <?php the_field('short_description'); ?>
                        </div>

                    </li>
                    <?php endwhile; wp_reset_postdata(); ?>
                </ul>


                <br class="clear">


            </article>
            <!-- /article -->

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
</div>

<?php

/**
 * Custom slider and the featured posts for the theme.
 */

if ( !function_exists( 'awaken_featured_posts' ) ) :

    function awaken_featured_posts() {

        $category = get_theme_mod( 'slider_category', '' );

        $slider_posts = new WP_Query( array(
                'posts_per_page' => 5,
                'cat'	=>	$category
            )
        ); 
        
        ?>

        <div class="awaken-featured-container">
            <div class="awaken-featured-slider">
                <section class="slider">
                    <div class="flexslider">
                        <ul class="slides">
                            <?php while( $slider_posts->have_posts() ) : $slider_posts->the_post(); ?>

                                <li>
                                    <div class="awaken-slider-container">
                                        <?php if ( has_post_thumbnail() ) { ?>
                                            <?php the_post_thumbnail( 'featured-slider' ); ?>
                                        <?php } else { ?>
                                            <img src="<?php echo get_template_directory_uri() . '/images/slide.jpg' ?>">
                                        <?php } ?>

                                        <div class="awaken-slider-details-container">
                                            <a href="<?php the_permalink(); ?>" rel="bookmark"><h1 class="awaken-slider-title"><?php the_title(); ?></h1></a>
                                        </div>
                                    </div>
                                </li>

                            <?php endwhile; ?>
                        </ul>
                    </div>
                </section>
            </div><!-- .awaken-slider -->
            <div class="awaken-featured-posts">
                <?php

                $method = get_theme_mod( 'fposts_display_method', 'category' );

                if ( $method == "sticky" ) {
                    
                    $args = array(
                        'posts_per_page'        => 2,
                        'post__in'              => get_option( 'sticky_posts' ),
                        'ignore_sticky_posts'   => 1
                    );

                } else {
                    
                    $fposts_category = get_theme_mod( 'featured_posts_category', '' );

                    $args = array(
                        'posts_per_page'        => 2,
                        'cat'                   => $fposts_category,
                        'ignore_sticky_posts'   => 1
                    );

                }

                $fposts = new WP_Query( $args );

                while( $fposts->have_posts() ) : $fposts->the_post(); ?>

                    <div class="afp">
                        <figure class="afp-thumbnail">
                            <?php if ( has_post_thumbnail() ) { ?>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail( 'featured', array('title' => get_the_title()) ); ?></a>
                            <?php } else { ?>
                                <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><img  src="<?php echo get_template_directory_uri(); ?>/images/featured.jpg" alt="<?php the_title(); ?>" /></a>
                            <?php } ?>
                        </figure>
                        <div class="afp-title">
                            <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
                        </div>
                    </div>

                <?php endwhile; ?>

            </div>
        </div>
    <?php
    }

endif;
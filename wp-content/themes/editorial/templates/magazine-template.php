<?php
/**
 * Template Name: Magazine Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Editorial
 */
get_header(); ?>

	<div class="featured-slider-section">
		
			<?php
	        	if( is_active_sidebar( 'editorial_home_slider_area' ) ) {
	            	if ( !dynamic_sidebar( 'editorial_home_slider_area' ) ):
	            	endif;
	         	}
	        ?>
		
	</div><!-- .featured-slider-section -->
	<div class="home-contnent-wrapper clearfix">
		
			<div class="home-primary-wrapper">
					<?php
			        	if( is_active_sidebar( 'editorial_home_content_area' ) ) {
			            	if ( !dynamic_sidebar( 'editorial_home_content_area' ) ):
			            	endif;
			         	}
			        ?>
			        
			</div><!-- .home-primary-wrapper -->
			<div class="home-secondary-wrapper">
				<?php
		        	if( is_active_sidebar( 'editorial_home_sidebar' ) ) {
		            	if ( !dynamic_sidebar( 'editorial_home_sidebar' ) ):
		            	endif;
		         	}
		        ?>
			</div><!-- .home-secondary-wrapper -->
		
	</div>
<?php
get_footer();
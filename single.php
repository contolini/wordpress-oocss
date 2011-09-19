<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Toolbox
 * @since Toolbox 0.1
 */

get_header(); ?>

		<div class="body" role="main">
		
			<?php get_sidebar(); ?>
		
			<div class="main">

			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<?php toolbox_content_nav( 'nav-above' ); ?>

				<?php get_template_part( 'content', 'single' ); ?>

				<?php toolbox_content_nav( 'nav-below' ); ?>

				<?php comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>

			</div><!-- .main -->

		</div><!-- .body -->
		
<?php get_footer(); ?>
<?php
/**
 * Template Name: Full-width, no sidebar
 * Description: A full-width template with no sidebar
 *
 * @package WordPress
 * @subpackage Toolbox
 * @since Toolbox 0.1
 */

get_header(); ?>

		<div class="body" role="main">
		
			<div class="main">

				<?php the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php comments_template( '', true ); ?>

			</div><!-- .main -->

		</div><!-- .body -->

<?php get_footer(); ?>
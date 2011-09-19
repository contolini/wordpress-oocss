<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Toolbox
 * @since Toolbox 0.1
 */

get_header(); ?>

		<div class="body" role="main">
		
			<?php get_sidebar(); ?>
		
			<div class="main">

				<?php the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php comments_template( '', true ); ?>

			</div><!-- .main -->

		</div><!-- .body -->
		
<?php get_footer(); ?>
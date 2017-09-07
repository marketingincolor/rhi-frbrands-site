<?php
/**
 * The template for displaying pages, with NO sidebar
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage zfwp-base
 * @since ZFWP Base 1.0
 */
global $post;
// $the_parent_id = wp_get_post_parent_id( $post_ID );
// $the_parent_post = get_post($the_parent_id);
// $the_post_type = get_post_type( $post_ID  );
get_header(); ?>

	<div id="main-content" class="row">
	<?php get_sidebar('landing'); ?>


			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();
				// Include the page content template.
				get_template_part( 'content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
				// End the loop.
			endwhile;
			?>

	</div>
<?php get_footer(); ?>
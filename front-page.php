<?php
/**
 * The custom template used for displaying front page content
 *
 * @package WordPress
 * @subpackage zfwp-base
 * @since ZFWP Base 1.0
 */
get_header(); ?>
<div class="row">
	<div class="small-12 small-centered columns">
			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();
				// Include the page content template.
				get_template_part( 'content', 'frontpage' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
				// End the loop.
			endwhile;
			?>
	</div>
</div>

<?php get_footer(); ?>
<?php
/**
 * The template used for displaying full page content
 *
 * @package WordPress
 * @subpackage zfwp-base
 * @since ZFWP Base 1.0
 */
?>
<div class="small-12 columns">
<article id="post-<?php the_ID(); ?>" <?php post_class( '' ); ?>>
	<header class="entry-header">

	<div class="show-for-medium-up">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</div>


	</header><!-- .entry-header -->
<!--      <?php #if ( has_post_thumbnail() ) : ?>
        <div class="entry-thumbnail hide-for-small-only">
            <?php #the_post_thumbnail(); ?>
            <hr/>
        </div>
    <?php #endif; ?> -->
	<div class="entry-content">
		<?php the_content(); ?>

	</div><!-- .entry-content -->
</article><!-- #post-## -->
</div>

<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage zfwp-base
 * @since ZFWP Base 1.0
 */
$this_parent = the_parent_slug();
$parent_list = array('franchisor', 'development-team-presentation');
?>
<div id="main-content" class="row">
	<?php get_sidebar('landing' );?>
	<div class="small-12 medium-8 columns">
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'columns' ); ?>>
			<header class="entry-header small-text-center medium-text-left">
			<?php if ( !in_array($this_parent, $parent_list) ) : ?>
				<?php #the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<?php endif; ?>

			<?php if ( in_array($this_parent, $parent_list) ) : ?>
				&nbsp;&nbsp;
			<?php endif; ?>
			</header><!-- .entry-header -->

			<div class="entry-content small-text-center medium-text-left">

				<?php if ( has_category() ) : ?>
				<div class="entry-meta">
					<img class="icon" src="<?php echo get_template_directory_uri(); ?>/img/r7-grfx-meta-ico-cal.png">
					&nbsp;<time datetime="<?php echo the_time('Y-m-j'); ?>"><?php echo the_time(get_option('date_format')); ?></time>
					&nbsp;|&nbsp;
					&nbsp;<img class="icon" src="<?php echo get_template_directory_uri(); ?>/img/r7-grfx-meta-ico-fold.png">
					&nbsp;<a href="#" rel="category"><?php the_category(', '); ?></a>
				</div>
				<?php endif; ?>

				<?php the_content(); ?>
				<?php
				wp_link_pages( array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'zfwpbase' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'zfwpbase' ) . ' </span>%',
					'separator'   => '<span class="screen-reader-text">, </span>',
				) );
				?>
			</div><!-- .entry-content -->
		</article><!-- #post-## -->
	</div>
</div>

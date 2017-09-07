<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage zfwp-base
 * @since ZFWP Base 1.0
 */

// Get Custom Fields for Buttons
$page_id       = get_queried_object_id();
$custom_fields = get_post_custom($page_id);
$image_link    = $custom_fields['image_link'];



// var_dump($custom_fields);
$this_parent = the_parent_slug();
$parent_list = array('franchisor', 'development-team-presentation');
?>
<div class="small-12 medium-8 columns">
<article id="post-<?php the_ID(); ?>" <?php post_class( '' ); ?>>
	<header class="entry-header">
	<?php if ( !in_array($this_parent, $parent_list) ) : ?>
		<div class="show-for-medium-up">
		<?php #the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</div>
	<?php endif; ?>
	<?php if ( in_array($this_parent, $parent_list) ) : ?>
		&nbsp;&nbsp;
	<?php endif; ?>
	</header><!-- .entry-header -->
<!--      <?php #if ( has_post_thumbnail() ) : ?>
        <div class="entry-thumbnail hide-for-small-only">
            <?php #the_post_thumbnail(); ?>
            <hr/>
        </div>
    <?php #endif; ?> -->
	<div class="entry-content">

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

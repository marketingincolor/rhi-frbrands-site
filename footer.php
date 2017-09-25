<?php
/**
 * The footer template
 *
 * @package WordPress
 * @subpackage zfwp-base
 * @since ZFWP Base 1.0
 */
global $post;
// $the_parent_id = wp_get_post_parent_id( $post_ID );
// $the_parent_post = get_post($the_parent_id);
// $the_post_type = get_post_type( $post_ID  );
?>


<div class="pre-foot grey-bg contain-to-grid">
	<div class="row">
		<div class="small-12 columns">

		</div>
	</div>
</div>


<footer id="colophon" class="footer dark-grey-bg contain-to-grid" role="contentinfo">
	<div class="row">
		<div class="site-footer small-12 columns"><br />
			<div class="site-footer-info show-for-medium-up medium-centered">
				<div class="vertical-center">
					<?php do_action('cta_info'); ?>
					<span class="pipe">|</span>
					<?php do_action('cta_address'); ?>
					<span class="pipe">|</span>
					<?php do_action('cta_phone'); ?>
					<!-- <span class="pipe">|</span> -->
					<?php #do_action('social_icons'); ?></div>
			</div><!-- .site-info -->
			<div class="site-footer-info show-for-small-only">
				<div class="vertical-center">
					<?php do_action('cta_info'); ?><br/>
					<?php do_action('cta_address'); ?><br/>
					<?php do_action('cta_phone'); ?><br/>
					<?php #do_action('social_icons'); ?>
						
				</div>
			</div><!-- .site-info -->
			<div class="site-footer-info">
				<div class="sub vertical-center">
					<!--<a href="<?php echo site_url('/terms-conditions'); ?>">Terms & Conditions</a>
					<span class="pipe">|</span>
					<a href="<?php echo site_url('/privacy-policy'); ?>">Privacy Policy</a>
					<span class="pipe">|</span>-->
					&copy;<?php echo date("Y") ?>  Rhino7 Franchise Development Corporation. All Rights Reserved
				</div>
			</div><!-- .site-info -->
			<div class="site-footer-info">
				<div class="vertical-center"><a href="<?php echo site_url(); ?>"><img id="footer-logo" src="<?php echo get_template_directory_uri(); ?>/img/r7-grfx-ftr-sm-logo.png" /></a></div>
			</div><!-- .site-info -->
		</div>
	</div>
</footer><!-- .site-footer -->


<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/foundation.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/foundation/foundation.topbar.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/foundation/foundation.tabs.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/foundation/foundation.dropdown.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/foundation/foundation.accordion.js"></script>

<?php wp_footer(); ?>

<script>
	$(document).foundation();
</script>



</body>
</html>
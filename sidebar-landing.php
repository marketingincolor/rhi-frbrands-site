<?php
/**
 * The sidebar for the franchisor landing pages
 *
 * @package WordPress
 * @subpackage zfwp-base
 * @since ZFWP Base 1.0
 */
?>
<div class="small-4 columns show-for-medium-up">
    <div class="sidebar-navmenu">
        <div class="sidebar-navmenu-button">
            <b>Menu</b> <img src="<?php echo get_template_directory_uri();?>/img/home-menu-button.png" style="cursor: pointer; display: inline-block;" id="sidebar-navmenu-btn">
        </div>
            
           <?php wp_nav_menu(
                        array(
                            'menu' => 'main-menu',
                            'theme_location' => 'primary',
                            'container_class' => 'sidebar-vertical',
                            'menu_class' => 'tree-sidebar-nav sidebar-nav',
                            'container'       => 'div',
                            'depth' => 3
                        )
            ); ?>

			<script type="application/javascript">
                jQuery(function(){
                    jQuery(".sidebar-navmenu-button").click(function() {
                        jQuery(".sidebar-vertical").toggle();
                    });
                    var MenuTree = {
                        collapse: function(element) {
                            element.slideToggle(100);
                        },
                        walk: function() {
                            jQuery('li > ul').each(function() {
                                var parent_li = jQuery(this).parent('li');
                                parent_li.prepend('<span></span>');
                            });
                            jQuery('span', '.tree-sidebar-nav').each(function() {
                                var $a = jQuery(this);
                                var $li = $a.parent();
                                if ($a.nextAll('ul')) {
                                    var $ul = $a.nextAll('ul');
                                    $a.click(function(e) {
                                        MenuTree.collapse($ul);
                                        $a.toggleClass('active');
                                    });
                                }
                                if ($li.hasClass('current-menu-item')) {
                                    MenuTree.collapse($ul);
                                }
                                if ($li.hasClass('current-menu-parent') || $li.hasClass('current-menu-ancestor') ) {
                                    MenuTree.collapse($ul);
                                }
                            });
                        }
                    };
                    MenuTree.walk();
                });
            </script>
            </div>
    </div>
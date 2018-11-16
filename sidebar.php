<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dro_caterer
 */

if ( ! is_active_sidebar( 'sidebar-right' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area sidebar-widget">
	<?php dynamic_sidebar( 'sidebar-right' ); ?>
</aside><!-- #secondary -->


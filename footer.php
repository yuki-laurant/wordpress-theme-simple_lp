<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package simple_lp
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<?php
				if(has_custom_logo()) {
					$brand = get_custom_logo();
				} else {
					$brand = '<a href="'. esc_url( home_url( '/' ) ) .'" rel="home">'. bloginfo( 'name' ) .'</a>';
				}
			?>
			<p class="site-title"><?php echo $brand; ?></p>
			<?php
				$simple_lp_theme_description = get_bloginfo( 'description', 'display' );
				if ( $simple_lp_theme_description || is_customize_preview() ) :
			?>
			<p class="site-description"><?php echo $simple_lp_theme_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

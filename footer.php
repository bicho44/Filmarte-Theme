<?php
/**
* The template for displaying the footer.
*
* Contains the closing of the #content div and all content after.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package Filmarte
*/

?>
<div class="wrapfooter">
	<footer id="colophon" class="site-footer" role="contentinfo">
		
		<div class="container">
			<!-- Menu Social -->
			<?php get_template_part('template-parts/menu', 'social'); ?>
		</div>
		<div class="site-info">
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'filmarte' ), 'filmarte', '<a href="http://imgdigital.com.ar/portfolio" rel="designer">Federico Reinoso</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

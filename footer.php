<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gaming-doug
 */

?>

	<footer id="colophon" class="site-footer">
		<div>
			<?php get_template_part('template-parts/content-footer'); ?>
		</div>
		<div class="site-info">
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'gaming-doug' ), 'gaming-doug', '<a href="https://github.com/Douglas-Caraballo">Douglas Caraballo</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

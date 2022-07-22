<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gaming-doug
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'gaming-doug' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<div class="no-results-content">
			<p class="no-results-content__figure">O_o?</p>
			<p class="no-results-content__information"><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'noticias-d' ); ?></p>
			<?php get_template_part('template-parts/components/reusable/element', 'search'); ?>
		</div>
		<div class="archive-sidebar">
			<?php get_sidebar(); ?>
		</div>
	</div><!-- .page-content -->
</section><!-- .no-results -->

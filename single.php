<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package gaming-doug
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php get_template_part('template-parts/content-single'); ?>

	</main><!-- #main -->

<?php
get_footer();

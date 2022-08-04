
<?php
	while ( have_posts() ) :
		the_post();
		?>
		<div class="content-single">
			<div class="content-single__wrapper">
				<?php get_template_part( 'template-parts/components/single/element', 'single' ); ?>
			</div>
			<div class="content-single__widgets">
				<?php get_template_part( 'template-parts/components/single/element-widgets', 'single' ); ?>
			</div>
		</div>

		<?php
		get_template_part('template-parts/components/single/navigation');

		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;

	endwhile; // End of the loop.
?>
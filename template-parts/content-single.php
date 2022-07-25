
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
		the_post_navigation(
			array(
				'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'gaming-doug' ) . '</span> <span class="nav-title">%title</span>',
				'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'gaming-doug' ) . '</span> <span class="nav-title">%title</span>',
			)
		);

		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;

	endwhile; // End of the loop.
?>
<?php get_header(); ?>
	<div id="page">
		<div class="content-wrapper clearfix">
			<main id="main">
				<!-- section -->
				<section>

					<h1><?php _e( 'Archives', 'html5blank' ); ?></h1>

					<?php get_template_part('loop'); ?>

					<?php get_template_part('pagination'); ?>

				</section>
				<!-- /section -->
			</main>
			<?php get_sidebar(); ?>
		</div>
	</div>


<?php get_footer(); ?>

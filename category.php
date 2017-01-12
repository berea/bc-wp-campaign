<?php get_header(); ?>
	<div id="page">
		<div class="content-wrapper clearfix">
			<main id="main">
				<!-- section -->
				<section>

					<h1><?php single_cat_title(); ?></h1>

					<?php get_template_part('loop'); ?>

					<?php get_template_part('pagination'); ?>

				</section>
				<!-- /section -->
			</main>
			<?php get_sidebar(); ?>
		</div>
		<div class="bottom-bg"></div>
	</div>


<?php get_footer(); ?>

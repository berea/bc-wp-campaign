<?php get_header(); ?>
	<div id="page" class="clearfix">
		<div class="content-wrapper clearfix">
			<main role="main" id="main">
				<!-- section -->
				<section>

					<h1><span class="title"><?php the_title(); ?></span><span class="orange-line"></span></h1>

				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

					<!-- article -->
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<?php the_content(); ?>

						<?php comments_template( '', true ); // Remove if you don't want comments ?>

						<br class="clear">

						<?php edit_post_link(); ?>

					</article>
					<!-- /article -->

				<?php endwhile; ?>

				<?php else: ?>

					<!-- article -->
					<article>

						<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

					</article>
					<!-- /article -->

				<?php endif; ?>

				</section>
				<!-- /section -->
			</main>
			<?php get_sidebar(); ?>
		</div>

		<div class="bottom-bg"></div>
	</div>


<?php get_footer(); ?>

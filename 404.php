<?php get_header(); ?>
	<div id="page">
		<div class="content-wrapper clearfix">

			<main role="main" id="main">
				<!-- section -->
				<section>

					<!-- article -->
					<article id="post-404">

						<h1><?php _e( 'Page not found', 'html5blank' ); ?></h1>
						<h2>
							<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'html5blank' ); ?></a>
						</h2>

					</article>
					<!-- /article -->

				</section>
				<!-- /section -->
			</main>
			<?php get_sidebar(); ?>
		</div>
	</div>
	<!-- TEST -->

<?php get_footer(); ?>


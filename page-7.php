<?php get_header(); ?>
			<section id="front-content">
				<div class="content-wrapper">
					<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
					<div class="tagline-links">
						<ul>
							<li class="invest"><a href="/nsh/campaign/invest">Invest</a></li>
							<li class="connect"><a href="/nsh/campaign/connect">Connect</a></li>
							<li class="transform"><a href="/nsh/campaign/transform">Transform</a></li>
						</ul>	
					</div>
				</div>
				
				<div id="lyle-wrapper" class="content-wrapper">
					<div class="lyle">
						<img src="<?php echo get_template_directory_uri(); ?>/img/Lyle.png" alt="">
						<div class="quote-symbol">&ldquo;</div>
						<p>Since its founding in 1855, Berea College has been inspired by its Great Commitments to invest in lives of great promise, connect them to build a strong learning community, and thereby transform those students, the region we serve, and the world beyond.</p>
						<p>“The new Margaret A. Cargill Natural Sciences and Health building is an investment in that mission of connection and transformation that will propel Berea College forward in the 21st century, rising to the challenge of its inspiring commitments and providing a unique model for higher education in our country."</p>
						<p class="lyle-sig right-align green-text"><span class="orange-text lyle-name">- Lyle D. Roelofs</span>President, Berea College</p>
					</div>
				</div>

				<div id="media-wrapper">
					<div class="pattern-background"></div>
					<div class="content-wrapper">
						<div class="table">
							<div class="table-row">
								<div class="table-cell video middle">
									<div class="video-wrapper">
										<iframe width="1280" height="720" src="https://www.youtube-nocookie.com/embed/6UyaorQ_ZRM?rel=0" frameborder="0" allowfullscreen></iframe>
									</div>
									<div>
										<a href="/nsh/video" class="custom-video-link">More Videos</a>
									</div>
								</div>
								<div class="table-cell quote middle">
									<div id="vignettes">
										<ul>
											<?php
												$args = array(
													'posts_per_page' => 5,
													'post_type' => 'profile',
													'post_status' => 'publish',
												);

												$query = new WP_Query($args);
												$wp_query = $query;
											?>

											<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
												<?php $image = get_field('image'); ?>

												<li class="vignette clearfix">
													<h1><span class="title"><?php the_field('type');?> Profile</span><span class="orange-line"></span></h1>
													<div class="table full-width">
														<div class="table-row">
															<div class="image table-cell"><a href="<?php print get_permalink();?>"><img src="<?php print $image['sizes']['medium']; ?>" alt="<?php the_title(); ?>"></a></div>
															<div class="snippet table-cell">
																<div class="text"><?php the_field('quote'); ?></div>
																<div class="name"><a href="<?php print get_permalink();?>"><?php the_title(); ?></a></div>
																<div class="profile-position"><?php the_field('position'); ?></div>
																<div class="company"><?php the_field('company'); ?></div>
															</div>
														</div>
													</div>
												</li>
											<?php endwhile; else : ?>
												<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
											<?php endif; ?>
										</ul>
										<div class="controls">
											<i class="left fa fa-caret-left"></i>
											<i class="right fa fa-caret-right"></i>
										</div>
										<a href="/nsh/profiles" class="more-link">More Profiles</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				
				<div class="single-column-video responsive-element">
					<div id="media-wrapper">
						<div class="customvideo-wrapper">
							<iframe src="https://www.youtube-nocookie.com/embed/6UyaorQ_ZRM?rel=0" frameborder="0" allowfullscreen></iframe>
						</div>
						<div>
							<a href="/nsh/video" class="responsive-video-link">More Videos</a>
						</div>
					</div>
				</div>
				
				<div id="gallery-wrapper">
					<div class="customvideo-wrapper">
						<iframe width="1280" height="720" src="https://www.youtube.com/embed/ObCQovQ9Wsg?autohide=1&showinfo=0&controls=0" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
			</section>

<?php get_footer(); ?>

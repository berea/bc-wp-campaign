<?php
	global $post;
?>

<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">


		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,700italic|Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
        <link href="<?php echo get_template_directory_uri(); ?>/fonts/KlinicSlab//stylesheet.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/css/style.css?5" rel="stylesheet">

		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<nav class="ribbon clear" role="banner">
				<div class="content-wrapper">
					<div id="menu-toggle">
						<i class="fa fa-bars"></i> Menu
					</div>

					<nav id="main-menu" class="responsive-element">
						<div class="shadow"></div>
						<div class="container content-wrapper">
							<div class="table full-height">
								<div class="table-row">
									<div class="table-cell middle">
										<div class="search">
											<?php get_search_form(); ?>
										</div>
										<ul class="menu clearfix">
											<li>
												<a href="/nsh/get-involved">Events</a>
												<ul class="submenu">
													<li><a href="/nsh/regional-gatherings">Regional Gatherings</a></li>
													<li><a href="/nsh/event-photos">Event Photos</a></li>
												</ul>
											</li>
											<li>
												<a href="/nsh/campaign-publications">Media & Publications</a>
												<ul class="submenu">
													<li><a href="/nsh/campaign-publications">Case for Support</a></li>
													<li><a href="/nsh/campaign-publications/#floor-plans">Floor Plan</a></li>
													<li><a href="/nsh/campaign-publications/#interviews">Interviews</a></li>
													<li><a href="https://oxblue.com/open/Berea/MC">Live Stream</a></li>
													<li><a href="/nsh/campaign-publications/#campaign-videos">Campaign Videos</a></li>
												</ul>
											</li>
											<li>
												<a href="/nsh/make-a-gift">Make a Gift</a>
												<ul class="submenu">
													<li><a href="/nsh/donate-now">Donate Now</a></li>
													<li><a href="/nsh/campaign-contributors">Campaign Contributors</a></li>
													<li><a href="/nsh/naming-opportunities">Naming Opportunities</a></li>
												</ul>
											</li>
										
											<li>
												<a href="/nsh/profiles">Profiles</a>
												<ul class="submenu">
													<li><a href="/nsh/campaign/profile/dean">Jimmy Dean</a></li>
													<li><a href="/nsh/campaign/profile/escamilla">Jazmin Escamilla</a></li>
												</ul>
											</li>
											<li>
												<a href="/nsh/campaign-leadership">Campaign Leadership</a>
												<ul class="submenu">
													<li><a href="/nsh/roelofs">Lyle Roelofs</a></li>
													<li><a href="/nsh/moses">Harold Moses</a></li>
													<li><a href="/nsh/berry">Chad Berry</a></li>
													<li><a href="/nsh/douglas">Bernadine Douglas</a></li>
													<li><a href="/nsh/blair">Nancy Blair</a></li>
													<li><a href="/nsh/roop">Dennis Roop</a></li>
													<li><a href="/nsh/hawks">Robert Hawks</a></li>
													<li><a href="/nsh/saderholm">Matt Saderholm</a></li>
												</ul>
											</li>
										</ul>
										<div class="tagline-links">
											<ul>
												<li class="invest"><a href="/nsh/campaign/invest">Invest</a></li>
												<li class="connect"><a href="/nsh/campaign/connect">Connect</a></li>
												<li class="transform"><a href="/nsh/campaign/transform">Transform</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</nav>

					<!-- logo -->
					<div class="logo">
						<a href="https://www.berea.edu/">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="//primary.berea.edu/wp-content/themes/bc-wp-2015/assets/images/bc-logo-stacked.svg" alt="Logo" class="logo-img">
						</a>
					</div>
					<!-- /logo -->

				</div>
			</nav>
			<!-- /header -->

			<header id="header">
				<div class="background-container">
					<?php if ($post->ID == 7): ?>
						<?php
							//echo do_shortcode('[gallery ids="14" columns="1" link="none" size="full" itemtag="div" icontag="div" captiontag="div"]');
							echo wp_get_attachment_image(282, $attr['size']);
						?>
					<?php else: ?>
						<img src="<?php echo get_template_directory_uri(); ?>/img/Molecules.png" alt="">
					<?php endif; ?>
				</div>
				<div class="title-wrapper content-wrapper"><a class="title-link" href="<?php echo home_url(); ?>">
					<h2 class="pretitle">A Campaign for the</h2>
					<h1 class="title">Margaret A. Cargill<br/><span>Natural Sciences</span> <span>and Health Building</span></h1>
				</a></div>

				<ul class="connect-links content-wrapper">
					<li><a href="/nsh/get-involved">Events</a></li>
					<li><a href="/nsh/make-a-gift">Make a Gift</a></li>
					<li><a href="/nsh/campaign-publications">Media & Publications</a></li>
					<li><a href="/nsh/campaign-leadership">Campaign Leadership</a></li>
				</ul>
			</header>

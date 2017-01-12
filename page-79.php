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

		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,700italic|Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
        <link href="<?php echo get_template_directory_uri(); ?>/fonts/KlinicSlab//stylesheet.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/sass/style.css" rel="stylesheet">

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

					<!-- logo -->
					<div class="logo">
						<a href="/nsh">
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
					<img src="<?php echo get_template_directory_uri(); ?>/img/Molecules.png" alt="">
				</div>
				<div class="content-wrapper">
					<h2 class="pretitle">A Campaign For The</h2>
					<h1 class="title">Margaret A. Cargill<br/><span>Natural Sciences</span> <span>and Health Building</span></h1>
				</div>
			</header>

			<section id="front-content">
				<div id="lyle-wrapper">
					<div class="pattern-background"></div>
					<div class="content-wrapper">
						<div class="table">
							<div class="table-row">
								<div class="table-cell video middle">
									<div class="video-wrapper">
										<iframe width="1280" height="720" src="https://www.youtube-nocookie.com/embed/U7ANIDJyid8?rel=0&amp;controls=0" frameborder="0" allowfullscreen></iframe>
									</div>
								</div>
								<div class="table-cell quote middle">
									<div class="lyle">
										<img src="<?php echo get_template_directory_uri(); ?>/img/Lyle.png" alt="">
										<div class="quote-symbol">&ldquo;</div>
										<p>Since its founding in 1855, Berea College has been inspired by its Great Commitments to invest in lives of great promise, connect them to build a strong learning community, and thereby transform those students, the region we serve, and the world beyond.</p>
										<p>“The new Margaret A. Cargill Natural Sciences and Health building is an investment in that mission of connection and transformation that will propel Berea College forward in the 21st century, rising to the challenge of its inspiring commitments and providing a unique model for higher education in our country."</p>
										<p class="lyle-sig right-align green-text"><span class="orange-text lyle-name">- Lyle D. Roelofs</span>President, Berea College</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="single-column-video responsive-element content-wrapper">
					<div class="video-wrapper">
						<iframe width="1280" height="720" src="https://www.youtube-nocookie.com/embed/U7ANIDJyid8?rel=0&amp;controls=0" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="content-wrapper">
					<div id="temp-msg">
						<h3>Groundbreaking Photos &amp; More</h3>
						<p><br/>Our Groundbreaking Ceremony, held on April 21st, was a wonderful opportunity for the Berea community to come together and celebrate the future of science and health education.  Our new website, including coverage from all the Groundbreaking events, will launch shortly.</p>
					</div>
				</div>

				<div id="gallery">
					<div class="images">
						<ul>
							<li class="active"><img src="<?php echo get_template_directory_uri(); ?>/img/gb6.jpg" alt="NSH Groundbreaking"></li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/img/gb2.jpg" alt="NSH Groundbreaking"></li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/img/gb3.jpg" alt="NSH Groundbreaking"></li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/img/gb4.jpg" alt="NSH Groundbreaking"></li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/img/gb5.jpg" alt="NSH Groundbreaking"></li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/img/gb1.jpg" alt="NSH Groundbreaking"></li>
						</ul>
					</div>
					<ul class="pager">
						<li class="active">1</li>
						<li>2</li>
						<li>3</li>
						<li>4</li>
						<li>5</li>
						<li>6</li>
					</ul>
				</div>

			</section>

			<!-- footer -->
			<footer id="footer">
				<div class="footer-logo"><a href="https://www.berea.edu"><img src="<?php echo get_template_directory_uri(); ?>/img/horizontal_white.png" alt="Berea College" class="college-logo"></a></div>
				<div class="color-triangles"><div class="left"></div><div class="right"></div></div>
				<div class="content-wrapper">
					<div class="site-info">
						<ul class="site-info-school">
							<li>Berea College</li>
							<li>Berea, Kentucky</li>
							<li>859-985-3000</li>
						</ul>
						<div class="site-info-links">
							<ul>
								<li><a href="https://www.berea.edu/legal-information/copyright-policy/">© 2015 Berea College</a></li>
								<li><a href="https://www.berea.edu/legal-information/privacy-policy/">Privacy Policy</a></li>
								<li><a href="https://www.berea.edu/legal-information/terms-of-use/">Terms of Use</a></li>
								<li><a href="/wp-admin">Website Administration</a></li>
							</ul> 
							<br><strong><p><a href="https://www.berea.edu/cisrk/">Consumer Information &amp; Student Right to Know</a></p></strong><br>
						</div>
						<!-- .site-info-links -->
					</div>
				</div>
			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>


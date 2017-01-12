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

				<div id="gallery">
					<div class="images">
						<ul>
							<li class="active"><img src="<?php echo get_template_directory_uri(); ?>/img/Main St South_update.jpg" alt=""></li>
							<li class="next"><img src="<?php echo get_template_directory_uri(); ?>/img/Campus Dr.jpg" alt=""></li>
							<li class="previous"><img src="<?php echo get_template_directory_uri(); ?>/img/Danforth.jpg" alt=""></li>
						</ul>
					</div>
					<ul class="pager">
						<li class="active">1</li>
						<li class="next">2</li>
						<li class="previous">3</li>
					</ul>
				</div>

				<div id="schedule" class="content-wrapper">
					<h3>Groundbreaking Ceremony - Science on Display - April 21, 2016</h3>
					<div class="lists">
						<ul class="left">
							<li>
								<span class="time">7:30 a.m.</span>
								<span class="divider"></span>
								<span class="name">Early Guest Registration<br/>- Alumni Building Lobby</span>
							</li>
							<li>
								<span class="time">8:30 a.m. - <span>10:00 a.m.</span></span>
								<span class="divider"></span>
								<span class="name">Student Poster Sessions<br/><a href="#workshops">Workshops &amp; Demonstrations</a></span>
							</li>
							<li>
								<span class="time">10:30 a.m. - <span>12:00 p.m.</span></span>
								<span class="divider"></span>
								<span class="name">Student Poster Sessions<br/><a href="#workshops">Workshops &amp; Demonstrations</a></span>
							</li>
							<li>
								<span class="time">12:00 p.m. - <span>1:30 p.m.</span></span>
								<span class="divider"></span>
								<span class="name">Lunch on Your Own</span>
							</li>
						</ul>
						<ul class="right">
							<li>
								<span class="time">1:30 p.m. - <span>3:00 p.m.</span></span>
								<span class="divider"></span>
								<span class="name">Student Poster Sessions<br/><a href="#workshops">Workshops &amp; Demonstrations</a></span>
							</li>
							<li>
								<span class="time">3:00 p.m.</span>
								<span class="divider"></span>
								<span class="name">Late Registration<br/>- Farm Store</span>
							</li>
							<li>
								<span class="time">4:30 p.m.</span>
								<span class="divider"></span>
								<span class="name">Groundbreaking Ceremony<br/>- Margaret A. Cargill<br/>Natural Sciences &amp; Health<br/>Building Site</span>
							</li>
						</ul>
					</div>
				</div>

				<div id="workshops" class="content-wrapper">
					<h3>Workshops &amp; Demonstrations</h3>
					<ul>
						<li>
							<h4>Physics and Music – Homemade Electronic Instruments</h4>
							<p>by Troy Messina</p>
							<p>27 Hall Science</p>
							<p>8:30 a.m. to 10 a.m.<br />
								10:30 a.m. to 12 p.m.<br />
								1:30 p.m. to 3 p.m.</p>
							<p>See the beauty of resonant vibrations in differently shaped instruments. Play piano, guitar, horns and drums on an Arduino-based MIDI instrument.</p>
						</li>
						<li>
							<h4>Caring for patients in pain: the art and science of nursing</h4>
							<p>by Monica Kennison, faculty, and staff</p>
							<p>Hafer-Gibson Nursing Education Skills Laboratory</p>
							<p>8:30 a.m. to 10 a.m.</p>
							<p>See how nurses use best practices in assessing patients in pain to intervene and provide effective pain management.</p>
						</li>
						<li>
							<h4>Quilts: Blending Art and Geometry </h4>
							<p>by Judy Rector</p>
							<p>209 Hall Sciences</p>
							<p>8:30 a.m. to 10 a.m.<br />
								10:30 a.m. to 12 p.m.<br />
								1:30 p.m. to 3 p.m.</p>
							<p>Mathematicians study tessellations—the repetition of patterns in the plane. Quilters employ these patterns adding color and design to form unique works of art. Come explore and celebrate this blending in log cabin quilts.</p>
						</li>
						<li>
							<h4>Mathematics of 3-D Image Reconstruction </h4>
							<p>by Larry Gratton</p>
							<p>201 Science</p>
							<p>10:30 a.m. to 12 p.m.<br />
								1:30 p.m. to 3 p.m.</p>
							<p>Using mathematical techniques, known as phase-measuring profilometry, we combine a sequence of 2-D digital images, captured under specific lighting conditions, to form an accurate 3-D reconstruction of a surface.</p>
						</li>
						<li>
							<h4>The Chemistry of Art </h4>
							<p>by Mary Robert Garrett</p>
							<p>306 Hall Science</p>
							<p>8:30 a.m. to 10 a.m.<br />
								10:30 a.m. to 12 p.m.<br />
								1:30 p.m. to 3 p.m.</p>
							<p>We'll explore the chemistry behind designing brass-etched medallions for and dyeing silk scarves.</p>
						</li>
						<li>
							<h4>Good Fats &amp; Bad Fats - Chemical Analysis of Food </h4>
							<p>by Matt Saderholm</p>
							<p>24 Hall Science</p>
							<p>1:30 p.m. to 3 p.m.</p>
							<p>What is the difference between saturated &amp; unsaturated fats? Small chemical differences make big differences for our health. Mass spectrometry, a way to “weigh” molecules, can show the differences between these good fats and bad fats.</p>
						</li>
						<li>
							<h4>Native Kentucky Trees on Campus - Dendrology Tour </h4>
							<p>by Chris Adams</p>
							<p>Hall Science Lobby</p>
							<p>10:30 a.m. to 12 p.m.<br />
								1:30 p.m. to 3 p.m.</p>
							<p>A short walk across Berea’s campus will provide a basic overview of a large portion of the tree flora in the state of Kentucky.</p>
						</li>
						<li>
							<h4>Be Still My Heart - Heart Anatomy and the Electrocardiogram </h4>
							<p>By Sarah Blank</p>
							<p>104 Hall Science</p>
							<p>1:30 p.m. to 3 p.m.</p>
							<p>After examining heart anatomy, we will perform ECGs on volunteers to demonstrate the electrical activity of the heart.  You probably have seen an ECG on TV, but have you seen your own? </p>
						</li>
						<li>
							<h4>Feeling Blue - Archeology in Appalachia</h4>
							<p>by Broughton Anderson</p>
							<p>108 Hall Science</p>
							<p>8:30 a.m. to 10 a.m.<br />
								10:30 a.m. to 12 p.m.<br />
								1:30 p.m. to 3 p.m.</p>
							<p>Establishing the past lives of Appalachia in the Berea College Forest using XRF technology to take a deeper look at artifacts like the cobalt blue grass bead.</p>
						</li>
						<li>
							<h4>Fired Up: Ceramics and Glazing Chemistry </h4>
							<p>by Ray Gonzalez, Phillip Wiggs, and Students</p>
							<p>Ceramics Studio, Danforth Technology Building Basement</p>
							<p>8:30 a.m. to 10 a.m.<br />
								10:30 a.m. to 12 p.m.<br />
								1:30 p.m. to 3 p.m.</p>
							<p>We will discuss the physical properties and chemical compositions of mineral substances used in ceramic glazes which are essential to the glaze firing process.  All glazes must be formulated by precise weight, measure and with an understanding of how various materials react to each other to give desired effects.</p>
						</li>
						<li>
							<h4>The Craft and Science of Broom Making and Dyeing </h4>
							<p>by Olivia Slater, Student, and Chris Robbins, Staff</p>
							<p>Mueller Student Crafts Building</p>
							<p>8:30 a.m. to 10 a.m.<br />
								10:30 a.m. to 12 p.m.<br />
								1:30 p.m. to 3 p.m.</p>
							<p>Broomcorn (the bush material used in producing brooms) is a cellulose fiber that can be colored by immersion in a heated water bath that includes the application of a colorant.  Water temperature, type of colorant and duration of “soak” will yield varying results. Unless a broom maker has complete understanding of the age of the broomcorn, coupled with dye type and concentration levels, wide variation will result.</p>
						</li>
						<li>
							<h4>Computers, Pattern Development and Weaving </h4>
							<p>by Elaine Barkley, Student, and Amy Judd, Staff</p>
							<p>Fireside Weaving Studio (behind the Log House)</p>
							<p>8:30 a.m. to 10 a.m.<br />
								10:30 a.m. to 12 p.m.<br />
								1:30 p.m. to 3 p.m.</p>
							<p>Weaving is a number and pattern oriented process and has underlying connections to computing. Using the AVL Compu-Dobby loom, Berea College Crafts weaving students explore the connections between pattern development and a computer design process.</p>
						</li>
						<li>
							<h4>All That Glitters - Jewelry and Metallurgy </h4>
							<p>by Augusta Enns, Student</p>
							<p>Berea College Visitor Center and Shoppe</p>
							<p>8:30 a.m. to 10 a.m.<br />
								10:30 a.m. to 12 p.m.<br />
								1:30 p.m. to 3 p.m.</p>
							<p>From applied chemical applications to altering the atmosphere around non-ferrous metals, jewelers and metalsmiths have a wide range of options for surface coloration A thorough understanding of the properties associated with each non-ferrous metal and the changes that result from various alloy percentages allow jewelers to explore patination as a creative perspective.</p>
						</li>
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


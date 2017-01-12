<?php
	global $post;
?>
			<!-- footer -->
			<footer id="footer">
				<section class="info-links">
					<div class="content-wrapper">
						<ul class="connect-links">
							<li><a href="/nsh/get-involved">Events</a></li>
							<li><a href="/nsh/make-a-gift">Make a Gift</a></li>
							<li><a href="/nsh/campaign-publications">Campaign Publications</a></li>
							<li><a href="/nsh/campaign-leadership">Campaign Leadership</a></li>
						</ul>
						<?php if($post->ID !== 7) dynamic_sidebar('widget-area-2'); ?>
					</div>
				</section>

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
								<li><a href="https://www.berea.edu/give">Support the Berea Fund</a></li>
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

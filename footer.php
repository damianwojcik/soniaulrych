	<!-- =================================================
			footer
	================================================== -->
	<footer>

		<div class="container">

			<div class="row">

				<div class="span3">

					<h4>Foto Soul</h4>

					<a href="<?=SITE_URL?>" class="footer-logo">
						<img src="<?= THEME_URL; ?>/assets/images/logo.png" />
					</a>

					<?php
					$url_facebook = get_field('url_facebook', 'option');
					$url_instagram = get_field('url_instagram', 'option');
					?>

					<ul class="social-icons">
						<li><a href="<?php echo $url_facebook; ?>"><img src="<?= THEME_URL; ?>/assets/images/icons/icon-facebook.png" alt="Facebook"></a></li>
						<li><a href="<?php echo $url_instagram; ?>"><img src="<?= THEME_URL; ?>/assets/images/icons/icon-instagram.png" alt="Instagram"></a></li>
					</ul>

				</div>

				<div class="span3">

					<h4>Najnowsze wpisy</h4>

					<ul class="recent-posts">

					<?php
					$args = array( 'numberposts' => '7', 'category' => '7' );
					$recent_posts = wp_get_recent_posts( $args );

						foreach( $recent_posts as $recent ){
							echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
						}

					?>

					</ul>

				</div>

				<div class="span3">

					<h4>Instagram</h4>

					<?php dynamic_sidebar('footer_third'); ?>

				</div>

				<div class="span3">

					<h4>Autor</h4>

					<p class="copy">
						Wykonał &#169; 2016 <a href="https://www.facebook.com/khamian">khamian</a><br/>
					 	Wszelkie prawa zastrzeżone.
					</p>

				</div>

			</div>

		</div>

	</footer>

</div>
<!-- END page-wrapper -->

<!-- End Document
================================================== -->
<script src="<?= THEME_URL; ?>/assets/js/scripts.js"></script>

<?php wp_footer(); ?>
</body>
</html>

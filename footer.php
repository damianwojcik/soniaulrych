	<!-- =================================================
			footer
	================================================== -->
	<footer>

		<div class="container">

			<div class="row">

				<div class="span3">

					<h4>Foto Soul</h4>

					<a href="<?=SITE_URL?>" class="footer-logo">
						<img class="b-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= THEME_URL; ?>/assets/images/logo.png" alt="Foto Soul">
					</a>

					<?php
					$url_facebook = get_field('url_facebook', 'option');
					$url_instagram = get_field('url_instagram', 'option');
					?>

					<ul class="social-icons">
						<li><a href="<?php echo $url_facebook; ?>">
							<img class="b-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= THEME_URL; ?>/assets/images/icons/icon-facebook.png" alt="Facebook">
						</a></li>
						<li><a href="<?php echo $url_instagram; ?>">
							<img class="b-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= THEME_URL; ?>/assets/images/icons/icon-instagram.png" alt="Instagram">
						</a></li>
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
						Wykonał &#169; 2016 <a target="_blank" href="http://damianwojcik.it/">damianwojcik.IT</a><br/>
					 	Wszelkie prawa zastrzeżone.
					</p>

				</div>

			</div>

		</div>

        <div id="tags">
            <h1>fotograf tychy</h1>
            <h1>fotograf katowice</h1>
            <h1>fotografia ślubna</h1>
            <h1>fotografia dziecięca</h1>
            <h1>sesja</h1>
            <h1>sesja ślubna</h1>
            <h1>sesja ślubna tychy</h1>
            <h1>sesja noworodkowa</h1>
            <h1>sesja noworodkowa tychy</h1>
            <h1>sesja narzeczeńska</h1>
            <h1>sesja narzeczeńska tychy</h1>
            <h1>sesja tychy</h1>
            <h1>zdjęcia tychy</h1>
            <h1>zdjęcia okolicznościowe</h1>
            <h1>zdjęcia okolicznościowe tychy</h1>
            <h1>zdjęcia reklamowe tychy</h1>
            <h1>dron</h1>
            <h1>dron tychy</h1>
            <h1>fotografia dron</h1>
            <h1>fotografia dron tychy</h1>
            <h1>grafik tychy</h1>
            <h1>grafik komputerowy tychy</h1>
            <h1>projektowanie graficzne katowice</h1>
            <h1>projektowanie graficzne tychy</h1>
            <h1>grafika reklamowa</h1>
            <h1>logo</h1>
            <h1>projektowanie logo tychy</h1>
            <h1>google</h1>
        </div>

	</footer>

</div>
<!-- END page-wrapper -->

<!-- End Document
================================================== -->
<?php wp_footer(); ?>
</body>
</html>

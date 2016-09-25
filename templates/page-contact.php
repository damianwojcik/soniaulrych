<?php /* Template Name: Strona Kontaktowa */ ?>

<?php get_header(); ?>

<div class="section-title">

    <div class="container">

        <div class="row">

            <div class="span12">

            	<?php
            		$page_title = get_field('page_title');
					$page_subtitle = get_field('page_subtitle');?>

            	<!-- standard page title (ACF) -->
            	<?php if( !empty($page_title) ): ?>
                <h1 class="title"><?php echo $page_title; ?></h1>
                <?php endif; ?>

               	<!-- standard page subtitle (ACF) -->
                <?php if( !empty($page_subtitle) ): ?>
                <small><?php echo $page_subtitle; ?></small>
                <?php endif; ?>


            </div>

        </div>

    </div>

</div>


<?php
$url_facebook = get_field('url_facebook', 'option');
$url_instagram = get_field('url_instagram', 'option');
?>

<main>

	<div class="container">

		<div class="row">

			<div class="span6">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<?php the_content(); ?>

				<?php endwhile; endif; ?>

			</div>

			<div class="span6">

				<h2>Sonia Ulrych</h2>

				<div class="details-wrap">
					<span class="contact-details">Tel: <a href="callto:512211305">512 211 305</a></span>
				</div>

				<div class="details-wrap">
					<span class="contact-details">Email: </span><a href="mailto:soniaulrych@gmail.com">soniaulrych@gmail.com</a></span>
				</div>

					<ul class="social-icons">
						<li><a href="<?php echo $url_facebook; ?>"><img src="<?= THEME_URL; ?>/assets/images/icons/icon-facebook.png" alt="Facebook"></a></li>
						<li><a href="<?php echo $url_instagram; ?>"><img src="<?= THEME_URL; ?>/assets/images/icons/icon-instagram.png" alt="Instagram"></a></li>
					</ul>

          <iframe class="facebook-plugin" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffotosoulsoniaulrych%2F&tabs=timeline&width=280&height=400&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="280" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

			</div>

		</div>

    <div class="row">

    	<iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d103122.14625248754!2d18.960802142115984!3d50.12833977285708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4716c806e6f25f67%3A0xd1289ed2b06587f4!2sEstkowskiego%2C+Tychy!5e0!3m2!1spl!2spl!4v1471164743908" width="100%" height="300" frameborder="0" style="border:0 width:100%;" allowfullscreen></iframe>

    </div>

	</div>

</main>


<?php get_footer(); ?>

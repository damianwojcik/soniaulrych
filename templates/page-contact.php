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

                <div class="fb-page" data-href="https://www.facebook.com/fotosoulsoniaulrych/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/fotosoulsoniaulrych/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/fotosoulsoniaulrych/">Foto Soul Sonia Ulrych</a></blockquote></div>

			</div>

		</div>

        <div class="row">

            <div id="map"></div>

        </div>

	</div>

</main>


<?php get_footer(); ?>

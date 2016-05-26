
<div class="section-category">

	<div class="container">

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php

					$link = get_permalink();

					$post_format = get_post_format();

					$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );

				?>

				 <a href="<?= $link; ?>">

	                <div class="category-item">

	                    <div class="category-item-image" style="background-image: url('<?php echo $featured_image[0]; ?>');">

	                        <div class="item-overlay">

	                        	<?php if( is_category( '6' ) ) { ?>

	                        	<img src="<?= THEME_URL; ?>/assets/images/icons/icon-locked.png" alt="Zobacz galerię">

	                        	<?php
	                        	}
	                        	else{
	                        	?>

                            	<img src="<?= THEME_URL; ?>/assets/images/icons/icon-gallery.png" alt="Zobacz galerię">

                            	<?php } ?>

                       		</div>

	                    </div>

	                    <div class="category-item-meta">

	                        <h2><?= the_title(); ?></h2>

	                    </div>

	                </div>

	          	</a>

			<?php endwhile; ?>



<?php else: ?>


		<div class="content-placeholder">

			<a href="<?= SITE_URL; ?>/media" class="content-placeholder-wrap" title="Media">

				Materiały pojawią się niebawem, zdjęcia dla prasy dostępne w zakładce <span>Media</span>

			</a>

		</div>


<?php endif; ?>


	</div>

</div>

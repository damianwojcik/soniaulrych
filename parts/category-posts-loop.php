
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

	                    <div class="category-item-image b-lazy" data-src="<?php echo $featured_image[0]; ?>">

	                        <div class="item-overlay">

	                        	<?php if( is_category( '6' ) ) { ?>

								<img class="b-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= THEME_URL; ?>/assets/images/icons/icon-locked.png" alt="Zobacz galerię">

	                        	<?php
	                        	}else{
	                        	?>

								<img class="b-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= THEME_URL; ?>/assets/images/icons/icon-gallery.png" alt="Zobacz galerię">

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


		<h2>Brak materiałów do wyświetlenia.</h2>


<?php endif; ?>


	</div>

</div>

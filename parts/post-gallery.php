<?php
	$categories = get_the_category();
	$category_id = $categories[0]->cat_ID;
?>

	<div class="section-title">

	    <div class="container">

	        <div class="row">

	            <div class="span12">

	                <!-- category page title -->
	                <h1 class="breadcrumbs">

	                	<?php if(function_exists('bcn_display')){
	                		bcn_display();
	                	}?>

	                </h1>

	            </div>

	        </div>

	    </div>

	</div>


<div class="section-category">

	<div class="gallery">

		<div class="container">

			<?php if(post_password_required()){
			  echo get_the_password_form();
			}else{?>


			<?php $images = get_field('gallery_images'); ?>

			<?php if (!empty($images)) : ?>

				<?php $i = 1 ?>

				<?php foreach ($images as $image) : ?>

					<?php if( $category_id == '6'  ) { ?>

						<a href="<?= $image['sizes']['huge']; ?>" rel="lightbox">

			                <div class="category-item">

			                    <div class="category-item-image b-lazy" data-src="<?= $image['sizes']['large']; ?>">

			                        <div class="item-overlay">

										<img class="b-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= THEME_URL; ?>/assets/images/icons/icon-zoom.png" alt="Zobacz zdjęcie">

			                        </div>

			                    </div>

			                    <div class="category-item-meta">

			                        <h2><?php echo $i; ?></h2>

			                    </div>

			                </div>

			            </a>

						<?php $i = $i + 1 ?>
					<?php } else {?>

					<a href="<?= $image['sizes']['huge']; ?>" rel="lightbox">

			            <div class="gallery-item">

			                <div class="gallery-item-image b-lazy" data-src="<?= $image['sizes']['large']; ?>">

			                    <div class="item-overlay">

									<img class="b-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= THEME_URL; ?>/assets/images/icons/icon-zoom.png" alt="Zobacz zdjęcie">

                       			 </div>

			                </div>

			            </div>

				    </a>

					<?php } //endif ?>

				<?php endforeach; ?>

			<?php endif; ?>

			<?php } ?>

		</div>

	</div>

</div>

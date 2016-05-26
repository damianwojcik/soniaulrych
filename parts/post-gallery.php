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

				<?php foreach ($images as $image) : ?>

					<a href="<?= $image['sizes']['huge']; ?>" rel="lightbox">

			            <div class="gallery-item">

			                <div class="gallery-item-image" style="background-image: url(<?= $image['sizes']['large']; ?>);">

			                    <div class="item-overlay">

                            		<img src="<?= THEME_URL; ?>/assets/images/icons/icon-zoom.png" alt="Zobacz zdjęcie">

                       			 </div>

			                </div>

			            </div>

				    </a>

				<?php endforeach; ?>

			<?php endif; ?>

			<?php } ?>

		</div>

	</div>

</div>

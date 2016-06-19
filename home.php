<?php get_header(); ?>

	<div class="section-title">

	    <div class="container">

	        <div class="row">

	            <div class="span12">

	            	<?php
	            	$page_title = get_field('title_h1', 'option');
					$page_subtitle = get_field('title_h1_small', 'option');?>

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


	<!-- =================================================
			section-slider
	================================================== -->
	<div class="section-slider">

		<div class="container">

			<div class="row">

				<div class="span12">

					<div class="owl-carousel">

						<?php

						// check if the repeater field has rows of data
						if( have_rows('slide', 'option') ):

					 	// loop through the rows of data

							while ( have_rows('slide', 'option') ) : the_row();

							$image = get_sub_field('image'); ?>

								<a href="<?php echo get_category_link( 2 ); ?>" class="item" style="background-image: url('<?php echo $image['url']; ?>">

									<div class="btn">
											Zobacz więcej
									</div>

								</a>

							<?php

							endwhile;

							else :

							    // no rows found

							endif;

							?>

					</div>

				</div>
				<!-- END span12 -->

			</div>

		</div>

	</div>
	<!-- END section-slider -->


	<!-- =================================================
			section about
	================================================== -->

	<?php
	// check if the repeater field has rows of data
	if( have_rows('section_about', 'option') ):

	 	// loop through the rows of data
	    while ( have_rows('section_about', 'option') ) : the_row();

			$title = get_sub_field('title');
			$image = get_sub_field('image');
			$content = get_sub_field('content');

			?>

	<div class="section-about">

		<div class="container">

			<div class="row-tight">

				<div class="span4">

					<a href="<?php echo get_page_link(32); ?>" class="circle-wrap">

						<div class="circle-wrap-img b-lazy" data-src="<?php echo $image['url']; ?>">

							<div class="circle-wrap-overlay"></div>

						</div>

					</a>

				</div>
				<!-- END span4 -->

				<div class="span8">

					<div class="wrap">

						<h3><?php echo $title; ?></h3>

						<p>

							<?php echo $content; ?>

						</p>

					</div>
					<!-- END wrap -->

				</div>
				<!-- END span8 -->

			</div>

		</div>

	</div>
	<!-- END section-about -->

	<?php

	endwhile;

	else :

	    // no rows found

	endif;

	?>


	<!-- =================================================
			section-featured
	================================================== -->
	<div class="section-featured">

		<div class="container">

			<div class="row-tight">

				<?php
				// check if the repeater field has rows of data
				if( have_rows('section_featured', 'option') ):

				 	// loop through the rows of data
				    while ( have_rows('section_featured', 'option') ) : the_row();

						$title = get_sub_field('title');
						$image = get_sub_field('image');
						$content = get_sub_field('content');
						$link = get_sub_field('link');

						?>

				<div class="span3">

					<article>

						<a href="<?php echo $link; ?>" target="_self">

							<h2><?php echo $title; ?></h2>

							<img class="b-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">

							<p>
								<?php echo $content; ?>
							</p>

						</a>

					</article>

				</div>

				<?php

				endwhile;

				else :

				    // no rows found

				endif;

				?>

			</div>

		</div>

	</div>
	<!-- END section-featured -->


	<!-- =================================================
			section contact-panel
	================================================== -->
	<div class="section-contact-panel">

	<?php
	// check if the repeater field has rows of data
	if( have_rows('section_contact', 'option') ):

	 	// loop through the rows of data
	    while ( have_rows('section_contact', 'option') ) : the_row();

			$title = get_sub_field('title');
			$subtitle = get_sub_field('subtitle');
			$button_txt = get_sub_field('button_txt');

			?>

		<div class="container">

			<div class="row">

				<div class="span6">

					<h3><?php echo $title; ?></h3>
					<p><?php echo $subtitle; ?></p>

				</div>

				<div class="span6">

					<a href="<?php echo get_page_link(34); ?>" class="btn btn-large align-right"><?php echo $button_txt; ?></a>

				</div>

			</div>

		</div>

		<?php

		endwhile;

		else :

		    // no rows found

		endif;

		?>

	</div>





<?php get_footer(); ?>

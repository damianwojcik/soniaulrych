<?php get_header(); ?>

	<div class="section-title">

	    <div class="container">

	        <div class="row">

	            <div class="span12">

	                <h1 class="title">Blog</h1>

	            </div>

	        </div>

	    </div>

	</div>

<main>


	<section class="blog-archive">

		<div class="container">

			<div class="row">

				<div class="span8">

					<div class="wrap">

							<?php
						    $args=array(
						    'cat' => 7,
						    'orderby' => 'date',
						    'order' => 'DESC',
						    );
						    $temp = $wp_query;
						    $wp_query = new WP_Query( $args );

							// The Loop
							while ( $wp_query->have_posts() ) : $wp_query->the_post();
							$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
							?>

						<div class="blog-entry">

							<div class="blog-meta">

								<div class="meta-date">

									<span class="month"><?php the_time('M'); ?></span>
									<span class="day"><?php the_time('d'); ?></span>
									<span class="month"><?php the_time('Y'); ?></span>

								</div>

							</div>
							<!-- END blog-meta -->

							<div class="blog-excerpt">

								<div class="blog-excerpt-image" style="background-image: url('<?php echo $featured_image[0];?>');"></div>

								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

								<span class="blog-excerpt-tags">
									Tagi:<?php the_tags('', ', ', ''); ?>
								</span>

								<p class="trim">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis metus vitae ligula elementum ut luctus lorem facilisis. Sed non leo nisl, ac euismod nisi. Aenean augue dolor, facilisis id fringilla ut, tempus vitae nibh. Nullam nec diam risus. Donec laoreet ultricies rhoncus. Aliquam adipiscing,…
								</p>

								<a href="#" class="read-more">Continue reading...</a>
							</div>
							<!-- END blog-excerpt -->

						</div>
						<!-- END blog-entry -->

						<?php
						$wp_query = $temp;  //reset back to original query
						?>

						<?php endwhile; // end of the loop. ?>

					</div>
					<!-- END wrap -->

				</div>
				<!-- END span8 -->


				<div class="span4">

					<aside>

						<div class="aside-box">

							<h3>Najnowsze wpisy</h3>

								<ul>
									<li><small>data</small><a href="#">Tytul</a></li>
									<li><small>data</small><a href="#">TyT</a></li>
									<li><small>data</small><a href="#">TyT</a></li>
									<li><small>data</small><a href="#">Tyt</a></li>
									<li><small>data</small><a href="#">TyT</a></li>
									<li><small>data</small><a href="#">Tyty</a></li>
									<li><small>data</small><a href="#">Tyt</a></li>
								</ul>

						</div>
						<!-- END aside-box -->

						<div class="aside-box">
							<h3>Tagi</h3>

							<ul>
								<li><a href="#">Tag</a></li>
								<li><a href="#">Tagas</a></li>
								<li><a href="#">Taga</a></li>
								<li><a href="#">Taga</a></li>
							</ul>

						</div>
						<!-- END aside-box -->

						<div class="aside-box">
							Search
						</div>

						<?php

					get_sidebar(); ?>

					</aside>

				</div>
				<!-- END span4 -->

			</div>

		</div>

	</section>
	<!-- END section blog-archive -->

</main>

<?php get_footer(); ?>

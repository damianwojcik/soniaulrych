<?php get_header(); ?>

	<main>

		<div class="container">

			<div class="row">
				
				<div class="span12">

				<?php 

					if ( have_posts() ) : while ( have_posts() ) : the_post(); 

						$post_format = get_post_format();

						if ($post_format == 'gallery') {
							get_template_part("parts/post", "gallery");
						} else {
							get_template_part("parts/post", "default");
						}

					endwhile; endif;

				?>

				</div>

			</div>

		</div>

	</main>

	<?php get_template_part("parts/section", "article-navigation"); ?>

<?php get_footer(); ?>
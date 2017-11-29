<?php /* Template Name: Strona Single */ ?>

<?php get_header(); ?>

<div class="section-title">

    <div class="container">

        <div class="row">

            <div class="span12">

            	<?php 
            		$page_title = get_field('page_title');
					$page_subtitle = get_field('page_subtitle');
                    $button_txt = get_field('button_txt');
                    $button_url = get_field('button_url');
                    if( empty($button_url) ){ $button_url = '#'; }
                ?>

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


<main>

	<div class="container">

		<div class="row">

			<div class="span6">
				
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<?php the_content(); ?>								

				<?php endwhile; endif; ?>

			</div>

			<div class="span6">

				<?php if ( has_post_thumbnail() ) {

					$post_thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' ); 

				?>

					<div class="img-wrapper" style="background-image: url(<?php echo $post_thumbnail['0']; ?>)"></div>

				<?php } ?>

                <?php if( !empty($button_txt) ){ ?>

                    <div class="btn-wrapper">

                        <a href="<?php echo $button_url; ?>" class="btn btn-large"><?php echo $button_txt; ?></a>

                    </div>

                <?php } ?>
			
			</div>
			<!-- END span6 -->

		</div>

	</div>

</main>


<?php get_footer(); ?>
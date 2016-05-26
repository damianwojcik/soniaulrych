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


<main>

	<div class="container">

		<div class="row-tight">

			<div class="span12">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<?php the_content(); ?>

				<?php endwhile; endif; ?>

			</div>

		</div>

	</div>

</main>


<?php get_footer(); ?>

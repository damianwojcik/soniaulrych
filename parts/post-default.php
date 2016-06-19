<div class="section-title">

    <div class="container">

        <div class="row">

            <div class="span12">

              <h1 class="title">Blog</h1>

              <small>Najnowsze wiadomości z mojego świata</small>

            </div>

        </div>

    </div>

</div>
<!-- END section title -->


<main>

	<div class="container">

		<div class="row">

			<div class="span12">

				<?php

					$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
					$title = get_the_title();
					$day = get_the_date('d');
					$month = get_the_date('M');
					$year = get_the_date('o');
					$comments_num = get_comments_number();
					$comments_link = get_comments_link();
					$content = get_the_content();
					apply_filters('the_content', $content);
					$content = str_replace(']]>', ']]&gt;', $content);
					$content = apply_filters('the_content', $content);
					$trimmed_content = wp_trim_words( $content, 50 );

				?>

				<h3><?php echo $title; ?></h3>

				<!-- date -->
				<div class="post-meta">

					<div class="date_block">
						<span class="month"><?php echo $month; ?></span>
						<span class="day"><?php echo $day; ?></span>
						<span class="month"><?php echo $year; ?></span>
					</div>

					<a href="<?php echo $comments_link; ?>" class="comments_link">
						<span><?php echo $comments_num; ?></span>
						<span>Komentarzy</span>
					</a>

				</div>

				<!-- thumbnail -->
					<div class="full-width-img b-lazy"<?php if( !empty($thumbnail) ){ ?>
						data-src="<?php echo $thumbnail[0]; ?>" <?php } ?>></div>

				<!-- tags list -->
				<h5>Tagi:</h5>
				<?php the_tags( '<ul class="article-tags"><li>', '</li><li>', '</li></ul>' ); ?>

				<?php the_content(); ?>

				<?php comments_template(); ?>

			</div>

		</div>

	</div>

</main>

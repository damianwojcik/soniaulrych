<?php get_header(); ?>

<div class="section-title">

    <div class="container">

        <div class="row">

            <div class="span12">

                <h1 class="title">BLOG<?php if(is_date()){
                    echo ': ';
                    single_month_title(' ');
                }?></h1>

                <small>Najnowsze wiadomości z mojego świata</small>

            </div>

        </div>

    </div>

</div>


<main>

	<div class="container">

		<div class="row">

			<div class="span8">

				<ul class="article-tiles">

					<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post();  ?>

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

                <?php if(!(has_post_format( 'gallery' ))){ ?>

					<!-- single article -->
	                <li>

						<!-- title -->
						<h3><a href="<?php the_permalink(); ?>"><?php echo $title; ?></a></h3>

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
        		        <a href="<?php the_permalink(); ?>" class="tile-img-link">

        		          <div class="tile-img b-lazy"<?php if( !empty($thumbnail) ){ ?>
        				    data-src="<?php echo $thumbnail[0]; ?>" <?php } ?>></div>

        		        </a>

						<!-- tags list -->
						<h5>Tagi:</h5>
						<?php the_tags( '<ul class="article-tags"><li>', '</li><li>', '</li></ul>' ); ?>

						<!-- trimmed content -->
			      <p class="trimmed">
			        <?php echo $trimmed_content; ?>
			      </p>

			      <a href="<?php the_permalink(); ?>" class="read-more">Czytaj dalej...</a>

			    </li>

                <?php } //endif ?>

			  <?php endwhile; ?>

				</ul>

				<div class="nav-previous alignleft"><?php next_posts_link( 'Poprzednie' ); ?></div>
				<div class="nav-next alignright"><?php previous_posts_link( 'Następne' ); ?></div>

				<?php else : ?>

				  <p><?php _e('Przepraszamy, niestety nie znaleziono żadnych wpisów spełniających Twoje kryteria.'); ?></p>

				<?php endif; ?>

			</div>
			<!-- END span8 -->

			<div class="span4 blog_sidebar">

				<div class="row">

					<div class="sidebar-list">

                        <h5>Najnowsze wpisy</h5>

						<?php

						$args = array( 'numberposts' => '7', 'category' => '7' );
						$recent_posts = wp_get_recent_posts( $args );

						?>

						<ul>

							<?php

							setlocale(LC_TIME, "");

								foreach( $recent_posts as $recent ){

									$date = strftime('%b %d %Y', strtotime($recent['post_date']));

									echo '<li>';
									echo '<span class="post-date">' . $date . '</span>';
									echo '<a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"] . '</a></li>';
								}

							?>

						</ul>

					</div>

					<?php dynamic_sidebar('blog_sidebar'); ?>

				</div>
				<!-- END row -->

			</div>

		</div>

	</div>

</main>


<?php get_footer(); ?>

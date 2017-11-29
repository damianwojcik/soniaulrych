<?php /* Template Name: Strona Referencje */ ?>

<?php get_header(); ?>

    <div class="section-title">

        <div class="container">

            <div class="row">

                <div class="span12">

                    <?php
                        $page_title = get_field('page_title');
                        $page_subtitle = get_field('page_subtitle');
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

    <!-- =================================================
         section-testimonials
    ================================================== -->
    <?php if( have_rows('testimonial', 'option') ): ?>

    <div class="section-testimonials">

        <div class="container">

            <div class="row">

                <?php while( have_rows('testimonial', 'option') ): the_row();

                    $content = get_sub_field('content');
                    $photo = get_sub_field('photo');
                    $author = get_sub_field('author');

                ?>

                    <div class="item">

                        <blockquote>

                            <p><?php echo $content; ?></p>

                            <div class="testimonials-footer">

                                <?php if($photo) { ?>

                                    <img class="b-lazy testimonial-image" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php echo $photo['sizes']['thumbnail']; ?>" alt="<?php echo $photo['alt']; ?>">

                                <?php } ?>

                                <div class="testimonial-author">
                                    <?php the_sub_field('author'); ?>
                                </div>

                            </div>

                        </blockquote>

                    </div><!-- END item -->

                <?php endwhile; ?>

            </div><!-- END row -->

        </div><!-- END container -->

    </div><!-- END section-testimonials -->

    <?php endif; ?>

    </main>


<?php get_footer(); ?>
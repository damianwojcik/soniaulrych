<?php get_header(); ?>

    <?php if( !empty($page_title) or !empty($page_subtitle) or ( is_category() ) ) { ?>

    <div class="section-title">

        <div class="container">

            <div class="row">

                <div class="span12">

                    <h1 class="title">

                        <?php if(function_exists('bcn_display')){

                            bcn_display();

                        }?>

                    </h1>

                </div>

            </div>

        </div>

    </div>

    <?php } ?>

    <main>

        <div class="container">

            <div class="row-tight">

                <div class="span12">

                    <?php

                        $term_children = get_term_children( get_queried_object_id(), 'category' );

                        if ( !empty($term_children) ) :

                            include("parts/category-categories-loop.php");

                        else :

                            get_template_part("parts/category", "posts-loop");

                        endif;

                    ?>

                </div>

            </div>

        </div>

    </main>


<?php get_footer(); ?>


<div class="section-category">

    <?php

        $term_children = get_term_children( get_queried_object_id(), 'category' );

        if ( !empty($term_children) ) : ?>


        <div class="container">

            <?php foreach ($term_children as $term) : ?>

            <?php

                $category = get_category($term);
                $featured_image = get_field("featured_image", $category);
                $link = get_category_link($category->term_id);

            ?>


            <a href="<?= $link; ?>">

                <div class="category-item">

                    <div class="category-item-image" style="background-image: url(<?= $featured_image['sizes']['large']; ?>);">

                        <div class="item-overlay">

                            <img src="<?= THEME_URL; ?>/assets/images/icons/icon-gallery.png" alt="Zobacz galerię">

                        </div>

                    </div>

                    <div class="category-item-meta">

                        <h2><?= get_cat_name($category->term_id); ?></h2>

                    </div>

                </div>

            </a>

        <?php endforeach; ?>

    </div>


<?php endif; ?>

</div>

<?php get_header(); ?>


<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

        <?php get_header(); ?>

        <div class="container pt-5">
            <h2 class="text-center">Nos <span class="font-weight-bold"> Actualités <?php single_cat_title(); ?></span>
            </h2>
            <div class="row pt-5 justify-content-end">
                <div class="col-md-7 col-sm-12 mr-md-5  mr-sm-0   actu">
                    <?php
                    $categories = get_the_category();
                    $category_id =

                    $args = array(
                        'posts_per_page' => 5,
                        'cat' => $categories[0]->cat_ID,
                        'orderby' => 'date',
                    );
                    $my_posts = get_posts($args); ?>
                    <?php foreach ($my_posts as $post)  : setup_postdata($post); ?>


                        <div class="card actu mt-5 pb-4" >
                            <?php the_post_thumbnail() ;?>
                            <div class="card-body">
                                <h5 class="card-title"><?php the_title() ;?></h5>
                                <p class="card-text"><?php the_excerpt() ;?></p>
                                <a href="<?php the_permalink() ;?>" class="btn btn-actu text-light mt-3">Lire la suite</a>
                            </div>
                        </div>

                    <?php endforeach;; ?>

                </div>
                <div class="col actu-sidebar1  d-none d-md-block d-lg-block ">

                    <?php
                    if (is_active_sidebar('actu-sidebar-1')) {
                        dynamic_sidebar('actu-sidebar-1');
                    }
                    ?>

                </div>

            </div>
        </div>


        <?php get_footer(); ?>

    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>
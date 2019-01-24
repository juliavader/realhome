<?php get_header(); ?>
<div class="container">
    <section>
        <h2 class="pt-5 pb-5 font-weight-bold"><?php the_title(); ?></h2>
        <div class="row">

            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>

                    <div class="col col-sm-12 col-md-8">
                        <div class="img-single-propriete">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    </div>
                    <div class="col pt-sm-4 pt-md-0">
                        <p class="single-price"><i class="fas fa-bookmark pr-4"></i><?php the_field('prix'); ?> €</p>
                        <hr>
                        <p>Ville : <span class="font-weight-bold spec-single"><?php the_field('ville'); ?> </span></p>
                        <p>Nombre de pièces : <span
                                    class="font-weight-bold spec-single"><?php the_field('pieces'); ?></span></p>
                        <p>Infos : <span
                                    class="font-weight-bold spec-single"><?php the_field('infos'); ?></span></p>

                        <hr>
                        <p><?php the_content(); ?></p>
                    </div>


                <?php endwhile; ?>
            <?php endif; ?>
    </section>
    <hr>

    <section class=" pb-5 w-100 ">
        <h2 class=" pt-4 pb-4 ">Nos <span class="font-weight-bold">Propriétés</span></h2>

        <div class="container d-flex flex-wrap justify-content-around mt-5 ">

            <?php
            $args = array(
                'post_type' => 'propriete',
                'posts_per_page' => 4

            );

            // Query the posts:
            $propriete_query = new WP_Query($args);

            // Loop through the obituaries:
            while ($propriete_query->have_posts()) : $propriete_query->the_post(); ?>

            <a href="<?php the_permalink() ;?>" class="property_link">
                <div class="card text-center card-property-single">
                    <div class="card-img-top-single">
                        <?php the_post_thumbnail(); ?>
                    </div>

                    <div class="card-body pl-0 bg-white">
                        <h3 class="card-title text-left title-property-single"><?php the_title(); ?></h3>
                        <h4 class="card-subtitle text-muted city text-left"><?php echo get_post_meta($post->ID, 'ville', true); ?></h4>


                    </div>
                </div>
            </a>

            <?php endwhile;
            // Reset Post Data
            wp_reset_postdata(); ?>

        </div>

    </section>

</div>
</div>


<?php get_footer(); ?>

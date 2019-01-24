<?php /*Template Name: property*/  ;?>
<?php get_header() ;?>


<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>

        <section class="property pb-5">
            <h2 class="text-center pt-5 pb-5  font-weight-bold"><?php the_title() ;?></h2>
            <nav class="navbar col-sm-9 col-xs-12 mx-auto justify-content-around navbar-property">
                <?php $terms = get_terms('ville',array(
                    'hide empty' =>false
                ));?>
                <li class="nav-item active">
                    <a href="<?php echo site_url() ;?>/nos-proprietes">Tous</a>
                </li>
                <?php foreach( $terms as $term ) : ;?>

                    <li class="nav-item active">
                        <a href="<?php echo get_term_link($term->slug, 'ville') ;?>"><?php echo $term->name ;?></a>
                    </li>
                <?php endforeach; ;?>

            </nav>


            <div class="container d-flex flex-wrap justify-content-around mt-5 ">

                <?php
                $args = array(
                    'post_type' => 'propriete',
                    'posts_per_page' => -1,
                    'pot_not_in'=> array($post)

                );

                // Query the posts:
                $propriete_query = new WP_Query($args);

                // Loop through the obituaries:
                while ($propriete_query->have_posts()) : $propriete_query->the_post();  ?>


                    <a href="<?php the_permalink() ;?>" class="property_link">
                    <div class="card text-center" style="width: 22rem;">
                        <div class="card-img-top">
                            <?php the_post_thumbnail() ;?>
                        </div>

                        <div class="card-body bg-white">
                            <h3 class="card-title"><?php the_title() ;?></h3>
                            <h4 class="card-subtitle text-muted city"><?php echo get_post_meta($post->ID, 'ville', true) ;?></h4>
                            <h5><?php echo get_post_meta($post->ID, 'prix', true) ;?> €</h5>

                        </div>
                        <ul class=" card-menu list-group-flush options ">
                            <li class="list-group-item"><?php echo get_post_meta($post->ID, 'm2', true) ;?> m2</li>
                            <li class="list-group-item"><?php echo get_post_meta($post->ID, 'sallebain', true) ;?> Salle de bain </li>
                            <li class="list-group-item"><?php echo  get_post_meta($post->ID, 'chambres', true) ;?> Chambres</li>
                        </ul>
                    </div>
                    </a>


                <?php endwhile;
                // Reset Post Data
                wp_reset_postdata(); ?>

            </div>

        </section>

    <?php endwhile; ?>
<?php endif; ?>



<?php get_footer() ;?>



